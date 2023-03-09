<?php

/**
 * Object Serializer
 *
 * @copyright (c) 2022-2023 kronup.com
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://kronup.com/
 *
 * NOTE: This class is auto-generated by kronup.com
 * Do not edit this file manually!
 */

namespace Kronup\Sdk;
!defined("KRONUP-SDK") && exit();

use InvalidArgumentException;
use RuntimeException;
use Kronup\Model\ModelInterface;
use Kronup\Sdk\Psr7\MultipartStream;
use Kronup\Sdk\Psr7\Request;
use Kronup\Sdk\Psr7\Http\StreamInterface;

/**
 * Object Serializer
 */
class Serializer {
    /**
     * Date-time format
     *
     * @var string
     */
    protected static $_dateTimeFormat = \DateTimeInterface::ATOM;

    /**
     * Set the date-time format
     *
     * @param string $format The new date format to use
     */
    public static function setDateTimeFormat(string $format): void {
        self::$_dateTimeFormat = $format ?: \DateTimeInterface::ATOM;
    }

    /**
     * Get the date-time format
     *
     * @return string
     */
    public static function getDateTimeFormat(): string {
        return self::$_dateTimeFormat;
    }

    /**
     * Recursively serialize data
     *
     * @param mixed  $data   Data to serialize
     * @param string $format (optional) Format of the OpenAPITools type of the data; default <b>null</b>
     *
     * @return string|\object|null serialized form of $data
     */
    public static function sanitizeForSerialization($data, string $format = null) {
        $result = $data;

        do {
            if (is_scalar($data) || null === $data) {
                break;
            }

            if ($data instanceof \DateTime) {
                $result = "date" === $format ? $data->format("Y-m-d") : $data->format(self::getDateTimeFormat());
                break;
            }

            if (is_array($data)) {
                $result = [];
                foreach ($data as $property => $value) {
                    $result[$property] = self::sanitizeForSerialization($value);
                }
                break;
            }

            if (is_object($data) && !($data instanceof \stdClass)) {
                $values = [];

                if ($data instanceof ModelInterface) {
                    $values = $data->listProps() ?: [];
                    $formats = $data::openAPIFormats();

                    foreach ($data::openAPITypes() as $property => $openAPIType) {
                        $getter = $data::getters()[$property];
                        $value = $data->$getter();
                        if (null !== $value) {
                            if (
                                !in_array(
                                    $openAPIType,
                                    ['\DateTime', '\SplFileObject', 'array', 'bool', 'boolean', 'byte', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], 
                                    true
                                )
                            ) {
                                if (is_callable($callable = [$openAPIType, "getEnumValues"])) {
                                    // String typecast returns enum value
                                    $value = "$value";

                                    // Get allowed values
                                    $allowedEnumTypes = $callable();
                                    if (!in_array($value, $allowedEnumTypes, true)) {
                                        $imploded = implode("', '", $allowedEnumTypes);
                                        throw new InvalidArgumentException(
                                            "Invalid value for enum '$openAPIType', must be one of: '$imploded'"
                                        );
                                    }
                                }
                            }

                            $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization(
                                $value,
                                $formats[$property]
                            );
                        }
                    }
                } elseif (is_iterable($data)) {
                    foreach ($data as $property => $value) {
                        $values[$property] = self::sanitizeForSerialization($value);
                    }
                }

                $result = (object) $values;
                break;
            }
        } while (false);

        return $result;
    }

    /**
     * URL-encode query parameter
     *
     * @param string[]|string|\DateTime $value Value to serialize to string and url-encode
     *
     * @return string Serialized and url-encoded parameter
     */
    public static function toPathValue($value): string {
        // Preserve forward-slash ("/") characters in paths
        return implode("/", array_map("rawurlencode", explode("/", self::toQueryValue($value))));
    }

    /**
     * Replace OpenAPI curly-brace syntax variables in paths
     *
     * @param string $path     Curly-brace syntax path
     * @param array  $pathArgs Associative array of path arguments
     * @return string
     */
    public static function parse($path, $pathArgs = []) {
        if (is_array($pathArgs)) {
            foreach ($pathArgs as $key => $value) {
                $path = str_replace("{" . $key . "}", self::toPathValue($value), $path);
            }
        }

        return $path;
    }

    /**
     * Convert value to string or comma-separated list of strings
     *
     * @param string[]|string|\DateTime $value Object to serialize to string
     *
     * @return string|null Serialized parameter
     */
    public static function toQueryValue($value): string {
        return is_array($value)
            ? implode(
                ",",
                array_map(function ($item) {
                    return self::toString($item);
                }, $value)
            )
            : self::toString($value);
    }

    /**
     * Convert value to a header string
     * If it's a datetime object, format it in ISO8601
     *
     * @param \Kronup\Model\ModelInterface|string $value a string which will be part of the header.
     * @return string Header string
     */
    public static function toHeaderValue($value): string {
        return self::toString($value);
    }

    /**
     * Convert file(s) to CURLFile objects
     *
     * @param string|\SplFileObject|array<string|\SplFileObject> $files the value of the form parameter
     * @param int                                                $maxFileSize (optional) Maximum file size; default <b>52428800</b> (50MB)
     * @return \CURLFile[] CURL file resources
     * @throws InvalidArgumentException
     * @throws RuntimeException
     */
    public static function fileToFormValue($files, $maxFileSize = 52428800) {
        clearstatcache();

        $convert = function ($file) use ($maxFileSize) {
            $filePath = $file instanceof \SplFileObject ? $file->getRealPath() : "$file";

            if (!is_string($filePath) || !is_file($filePath)) {
                throw new InvalidArgumentException("Not a valid file: '$filePath'");
            }

            if (filesize($filePath) > $maxFileSize) {
                throw new RuntimeException("File is larger than {$maxFileSize} bytes");
            }

            return new \CURLFile($filePath, mime_content_type($filePath) ?: null, basename($filePath));
        };

        return is_array($files) ? array_map($convert, $files) : $convert($files);
    }

    /**
     * Convert value into suitable string
     * If it's a SplFileObject, convert it to real file path
     * If it's a DateTime object, format it in ISO8601
     * If it's a boolean, convert it to "true" or "false"
     *
     * @param string|\DateTime|\SplFileObject $value Parameter value
     *
     * @return string Stringified value
     * @throws RuntimeException
     */
    public static function toString($value): string {
        $result = "";

        do {
            if ($value instanceof \SplFileObject) {
                $result = $value->getRealPath();
                if (false === $result) {
                    throw new RuntimeException("File not found: '$result'");
                }
                break;
            }

            if ($value instanceof \DateTime) {
                $result = $value->format(self::getDateTimeFormat());
                break;
            }

            if (is_bool($value)) {
                $result = $value ? "true" : "false";
                break;
            }

            $result = "$value";
        } while (false);

        return $result;
    }

    /**
     * Convert body object into transferable string
     *
     * @param mixed  $object      Body object
     * @param string $contentType The expected body content type
     * @return string Encoded body value
     */
    public static function toBodyValue($object, string $contentType): string {
        $result = "";

        do {
            if ("application/json" === $contentType) {
                $result = json_encode(static::sanitizeForSerialization($object));
                break;
            }

            if (!is_array($object)) {
                $result = self::toString($object);
                break;
            }
        } while (false);
        return $result;
    }

    /**
     * Serialize an array to a string
     *
     * @param string[] $collection                 Collection to serialize to a string
     * @param string             $style                      The format use for serialization (csv, ssv, tsv, pipes, multi)
     * @param bool               $allowCollectionFormatMulti (optional); Allow collection format to be a multidimensional array; default <b>false</b>
     *
     * @return string
     * @throws \Kronup\Sdk\ApiException
     */
    public static function serializeCollection(
        array $collection,
        string $style,
        bool $allowCollectionFormatMulti = false
    ): string {
        $result = "";

        do {
            if ($allowCollectionFormatMulti && "multi" === $style) {
                if (null === ($queryString = http_build_query($collection, "", "&"))) {
                    throw new ApiException("Unable to serialize collection");
                }

                $result = preg_replace("/%5B[0-9]+%5D=/", "=", $queryString);
                break;
            }

            if (in_array($style, ["pipeDelimited", "pipes"])) {
                $result = implode("|", $collection);
                break;
            }

            if ("tsv" === $style) {
                $result = implode("\t", $collection);
                break;
            }

            if (in_array($style, ["spaceDelimited", "ssv"])) {
                $result = implode(" ", $collection);
                break;
            }

            $result = implode(",", $collection);
        } while (false);

        return $result;
    }

    /**
     * Deserialize a JSON string into an object
     *
     * @param mixed                      $data        Object or primitive to be deserialized
     * @param string                     $type        Some type that be returned
     * @param array<array-key, string[]> $httpHeaders (optional) For $type = \SplFileObject: A list of headers from the response; default <b>[]</b>
     * @param \Kronup\Sdk\Config          $config      (optional) For $type = \SplFileObject: Configuration object; default <b>null</b>
     *
     * @return mixed a single or an array of $type instances
     * @throws \Kronup\Sdk\ApiException
     * @throws \RuntimeException
     */
    public static function deserialize($data, string $type, array $httpHeaders = [], $config = null) {
        if (null === $data) {
            return null;
        }

        // File object
        if ("\SplFileObject" === $type) {
            if (!$config instanceof \Kronup\Sdk\Config) {
                throw new RuntimeException("'config' argument missing");
            }

            // Prepare the temporary path
            $tempPath = $config->getTempFolderPath();

            // Determine file name
            if (
                isset($httpHeaders["Content-Disposition"]) &&
                isset($httpHeaders["Content-Disposition"][0]) &&
                preg_match(
                    '/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i',
                    $httpHeaders["Content-Disposition"][0],
                    $match
                )
            ) {
                $filename = $tempPath . DIRECTORY_SEPARATOR . basename($match[1]);
            } else {
                $filename = tempnam($tempPath, "");
                if ($filename === false) {
                    throw new ApiException("Unable to create temporary directory");
                }
            }

            $file = fopen($filename, "w");
            if ($file === false) {
                throw new ApiException("Unable to write temporary file");
            }
            if (method_exists($data, "read")) {
                while ($chunk = $data->read(200)) {
                    fwrite($file, $chunk);
                }
            }
            fclose($file);

            return new \SplFileObject($filename, "r");
        }

        // Prepare the data
        $result = $data instanceof StreamInterface ? "$data" : $data;
        $result = is_string($result) ? json_decode($result) : $result;

        return null !== $result ? static::doDeserialize($result, $type) : null;
    }

    /**
     * Deserialize a JSON string into an object
     *
     * @param mixed  $data Object or primitive to be deserialized
     * @param string $type Class name is passed as a string
     *
     * @return mixed a single or an array of $type instances
     */
    public static function doDeserialize($data, string $type) {
        // json deserialization failed, don't continue.
        if (null === $data) {
            return null;
        }

        if (strcasecmp(substr($type, -2), "[]") === 0) {
            if (!is_array($data)) {
                throw new InvalidArgumentException("Invalid array '$type'");
            }

            /** @var string $subType */
            $subType = substr($type, 0, -2);
            $values = [];
            foreach ($data as $key => $value) {
                $values[] = self::doDeserialize($value, $subType);
            }
            return $values;
        }

        // For associative array e.g. array<string,int>
        if (preg_match("/^(array<|map\[)/", $type)) {
            settype($data, "array");
            $inner = substr($type, 4, -1);
            $deserialized = [];
            if (strrpos($inner, ",") !== false) {
                $subType_array = explode(",", $inner, 2);
                /** @var string $subType */
                $subType = $subType_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::doDeserialize($value, $subType);
                }
            }
            return $deserialized;
        }

        if ($type === "\DateTime") {
            if (!empty($data)) {
                try {
                    return new \DateTime($data);
                } catch (\Exception $exception) {
                    return (new \DateTime())->setTimestamp(strtotime($data));
                }
            } else {
                return null;
            }
        }

        // Type aliases
        $typeAliases = [
            "number" => "float",
            "void" => "null",
            "byte" => "string"
        ];

        /** @psalm-suppress ParadoxicalCondition */
        if (
            in_array(
                $type,
                [
                    "bool",
                    "boolean",
                    "int",
                    "integer",
                    "float",
                    "double",
                    "string",
                    "array",
                    "object",
                    "null",
                    "number",
                    "void",
                    "byte",
                    "mixed"
                ],
                true
            )
        ) {
            // Set types different from "mixed"
            "mixed" !== $data && settype($data, isset($typeAliases[$type]) ? $typeAliases[$type] : $type);
            return $data;
        }

        // We couldn't do a scalar cast, so we know this is a class string
        /** @var string $type */
        if (method_exists($type, "getEnumValues")) {
            if (!in_array($data, $type::getEnumValues(), true)) {
                $imploded = implode("', '", $type::getEnumValues());
                throw new InvalidArgumentException("Invalid value for enum '$type', must be one of: '$imploded'");
            }

            // New enum instance
            return new $type($data);
        } else {
            // If a discriminator is defined and points to a valid subclass, use it
            $discriminator = $type::_D;
            if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
                $subclass = '\Kronup\Model\\' . $data->{$discriminator};
                if (is_subclass_of($subclass, $type)) {
                    $class = $subclass;
                }
            }
        }

        /** @psalm-suppress MixedMethodCall */
        $instance = new $type();
        if ($instance instanceof ModelInterface) {
            if (count($instance::getters())) {
                if (is_object($data)) {
                    $additional_properties = get_object_vars($data);
                    foreach ($instance::openAPITypes() as $property => $model_types) {
                        $propertySetter = $instance::setters()[$property];
                        unset($additional_properties[$property]);

                        if (!isset($data->{$instance::attributeMap()[$property]})) {
                            continue;
                        }

                        $propertyValue = $data->{$instance::attributeMap()[$property]};
                        $instance->$propertySetter(self::doDeserialize($propertyValue, $model_types));
                    }

                    // Append any additional properties directly
                    foreach ($additional_properties as $property => $value) {
                        $instance->prop($property, $value);
                    }
                }
            } else {
                $instance->setData($data);
            }
        }

        return $instance;
    }

    /**
     * Create a request from relevant values
     *
     * @param \Kronup\Sdk\Config          $config      Configuration object
     * @param string                     $package     Request package
     * @param string                     $method      Request method type
     * @param string                     $url         Request URL
     * @param string                     $urlTemplate Request URL template
     * @param array<array-key, mixed>    $query       Query parameters
     * @param array<string, string|null> $headers     Headers
     * @param array<string|resource[]>   $form        Form parameters
     * @param mixed                      $body        (optional) Body object; default <b>empty string</b>
     */
    public static function createRequest(
        $config,
        string $package,
        string $method,
        string $url,
        string $urlTemplate,
        array $query,
        array $headers,
        array $form,
        $body = ""
    ) { 
        // Clean-up query
        $query = array_filter($query, function ($v) {
            return $v !== null;
        });

        $queryString = http_build_query($query);

        $headers = array_filter($headers, function ($v) {
            return $v !== null;
        });
        assert(empty($form) || empty($body), "Form parameters will override body.");

        // Multipart data
        $multipart = array_reduce(
            $form,
            function (bool $carry, $items): bool {
                $result = $carry;

                if (is_array($items)) {
                    foreach ($items as $item) {
                        if ($item instanceof \CURLFile) {
                            $result = true;
                            break;
                        }
                    }
                } elseif ($items instanceof \CURLFile) {
                    $result = true;
                }

                return $result;
            },
            false
        );

        if (!empty($form)) {
            if ($multipart) {
                $headers["Content-Type"] = "multipart/form-data";
            } elseif ("application/json" === ($headers["Content-Type"] ?? "")) {
                $body = json_encode($form);
            } else {
                // for HTTP post (form)
                $body = http_build_query($form);
            }
        }

        // Preapre request
        return (
            new Request(
                $method,
                $config->getHost() . $url . ($queryString ? "?{$queryString}" : ""),
                $headers,
                $multipart ? $form : (!empty($body) ? self::toBodyValue($body, $headers["Content-Type"] ?? "") : "")
            )
        )
            ->setTemplate($urlTemplate)
            ->setPackage($package);
    }
}
