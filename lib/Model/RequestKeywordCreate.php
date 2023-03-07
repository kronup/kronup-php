<?php

/**
 * Request_Keyword_Create Model
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
 * Request_Keyword_Create Model
 */
class RequestKeywordCreate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Request_Keyword_Create";
    protected static $_definition = [
        "keyword" => ["keyword", "string", null, "getKeyword", "setKeyword", null, ["r" => 0, "nl" => 1, "xl" => 64]], 
        "digest" => ["digest", "string", null, "getDigest", "setDigest", null, ["r" => 0, "nl" => 0, "xl" => 256]]
    ];

    /**
     * RequestKeywordCreate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get keyword
     *
     * @return string|null
     */
    public function getKeyword(): ?string {
        return $this->_data["keyword"];
    }

    /**
     * Set keyword
     * 
     * @param string|null $keyword Keyword
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setKeyword($keyword) {
        return $this->_set("keyword", $keyword);
    }

    /**
     * Get digest
     *
     * @return string|null
     */
    public function getDigest(): ?string {
        return $this->_data["digest"];
    }

    /**
     * Set digest
     * 
     * @param string|null $digest Keyword digest
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDigest($digest) {
        return $this->_set("digest", $digest);
    }
}
