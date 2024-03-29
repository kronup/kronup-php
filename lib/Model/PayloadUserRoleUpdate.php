<?php

/**
 * Payload_User_Role_Update Model
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
 * Payload_User_Role_Update Model
 * 
 * Payload object required to update User roles
 */
class PayloadUserRoleUpdate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Payload_User_Role_Update";
    protected static $_definition = [
        "roleSite" => ["roleSite", "string", null, "getRoleSite", "setRoleSite", null, ["r" => 0]], 
        "roleOrg" => ["roleOrg", "string", null, "getRoleOrg", "setRoleOrg", null, ["r" => 0]]
    ];

    /**
     * PayloadUserRoleUpdate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get roleSite - New site role
     *
     * @return string|null
     */
    public function getRoleSite(): ?string {
        return $this->_data["roleSite"];
    }

    /**
     * Set roleSite - New site role
     * 
     * @param string|null $role_site New site role
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRoleSite($role_site) {
        return $this->_set("roleSite", $role_site);
    }

    /**
     * Get roleOrg - New organization role
     *
     * @return string|null
     */
    public function getRoleOrg(): ?string {
        return $this->_data["roleOrg"];
    }

    /**
     * Set roleOrg - New organization role
     * 
     * @param string|null $role_org New organization role
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRoleOrg($role_org) {
        return $this->_set("roleOrg", $role_org);
    }
}
