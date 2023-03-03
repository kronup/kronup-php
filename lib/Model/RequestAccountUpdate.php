<?php

/**
 * Request_Account_Update Model
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
 * Request_Account_Update Model
 */
class RequestAccountUpdate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Request_Account_Update";
    protected static $_definition = [
        "userName" => ["userName", "string", null, "getUserName", "setUserName", null, ["r" => 0]]
    ];

    /**
     * RequestAccountUpdate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get userName
     *
     * @return string|null
     */
    public function getUserName(): ?string {
        return $this->_data["userName"];
    }

    /**
     * Set userName
     * 
     * @param string|null $user_name New user name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserName($user_name) {
        return $this->_set("userName", $user_name);
    }
}