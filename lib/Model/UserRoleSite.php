<?php

/**
 * User_roleSite Model
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

namespace Kronup\Model;
!defined("KRONUP-SDK") && exit();

/**
 * User_roleSite Model
 */
class UserRoleSite extends AbstractModel {

    public const _D = null;
    protected static $_name = "User_roleSite";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 0]], 
        "enum" => ["enum", "string[]", null, "getEnum", "setEnum", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * UserRoleSite
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type type
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType( $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get enum
     *
     * @return string[]|null
     */
    public function getEnum(): ?array {
        return $this->_data["enum"];
    }

    /**
     * Set enum
     * 
     * @param string[]|null $enum enum
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEnum(?array $enum) {
        return $this->_set("enum", $enum);
    }
}
