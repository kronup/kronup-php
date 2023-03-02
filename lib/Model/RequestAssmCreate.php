<?php

/**
 * Request_Assm_Create Model
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
 * Request_Assm_Create Model
 */
class RequestAssmCreate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Request_Assm_Create";
    protected static $_definition = [
        "digest" => ["digest", "string", null, "getDigest", "setDigest", null, ["r" => 0, "nl" => 1, "xl" => 256]]
    ];

    /**
     * RequestAssmCreate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string|null $digest Assumption digest
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDigest($digest) {
        return $this->_set("digest", $digest);
    }
}
