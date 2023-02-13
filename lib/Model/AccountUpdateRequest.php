<?php

/**
 * accountUpdate_request Model
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
 * accountUpdate_request Model
 */
class AccountUpdateRequest extends AbstractModel {

    public const _D = null;
    protected static $_name = "accountUpdate_request";
    protected static $_definition = [
        "user_name" => ["userName", "string", null, "getUserName", "setUserName", null, ["r" => 0]]
    ];

    /**
     * AccountUpdateRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get user_name
     *
     * @return string|null
     */
    public function getUserName(): ?string {
        return $this->_data["user_name"];
    }

    /**
     * Set user_name
     * 
     * @param string|null $user_name New user name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserName( $user_name) {
        return $this->_set("user_name", $user_name);
    }
}
