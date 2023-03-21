<?php

/**
 * Payload_Service_Account_Create Model
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
 * Payload_Service_Account_Create Model
 * 
 * Payload object required to create a Service Account
 */
class PayloadServiceAccountCreate extends AbstractModel {

    public const _D = null;
    public const ROLE_ORG_MANAGER = 'manager';
    public const ROLE_ORG_MEMBER = 'member';
    protected static $_name = "Payload_Service_Account_Create";
    protected static $_definition = [
        "roleOrg" => ["roleOrg", "string", null, "getRoleOrg", "setRoleOrg", null, ["r" => 1, "e" => 1]], 
        "userName" => ["userName", "string", null, "getUserName", "setUserName", null, ["r" => 1]]
    ];

    /**
     * PayloadServiceAccountCreate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getRoleOrgAllowableValues(): array {
        return [
            self::ROLE_ORG_MANAGER,
            self::ROLE_ORG_MEMBER,
        ];
    }

    /**
     * Get roleOrg - Service Account organization role
     *
     * @return string
     */
    public function getRoleOrg(): string {
        return $this->_data["roleOrg"];
    }

    /**
     * Set roleOrg - Service Account organization role
     * 
     * @param string $role_org Service Account organization role
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRoleOrg($role_org) {
        return $this->_set("roleOrg", $role_org);
    }

    /**
     * Get userName - Service account name
     *
     * @return string
     */
    public function getUserName(): string {
        return $this->_data["userName"];
    }

    /**
     * Set userName - Service account name
     * 
     * @param string $user_name Service account name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserName($user_name) {
        return $this->_set("userName", $user_name);
    }
}
