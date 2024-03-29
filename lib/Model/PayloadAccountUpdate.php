<?php

/**
 * Payload_Account_Update Model
 *
 * @copyright (c) 2022-2023 kronup.com
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://php.kronup.com/
 *
 * NOTE: This class is auto-generated by Kronup
 * Do not edit this file manually!
 */

namespace Kronup\Model;
!defined("KRONUP-SDK") && exit();

/**
 * Payload_Account_Update Model
 * 
 * Payload object required to update an Account
 */
class PayloadAccountUpdate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Payload_Account_Update";
    protected static $_definition = [
        "userName" => ["userName", "string", null, "getUserName", "setUserName", null, ["r" => 0]]
    ];

    /**
     * PayloadAccountUpdate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get userName - New user name
     *
     * @return string|null
     */
    public function getUserName(): ?string {
        return $this->_data["userName"];
    }

    /**
     * Set userName - New user name
     * 
     * @param string|null $user_name New user name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserName($user_name) {
        return $this->_set("userName", $user_name);
    }
}
