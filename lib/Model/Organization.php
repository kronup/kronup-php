<?php

/**
 * Organization Model
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
 * Organization Model
 */
class Organization extends AbstractModel {

    public const _D = null;
    protected static $_name = "Organization";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "orgName" => ["orgName", "string", null, "getOrgName", "setOrgName", null, ["r" => 0]], 
        "orgIconId" => ["orgIconId", "string", null, "getOrgIconId", "setOrgIconId", null, ["r" => 0]], 
        "orgOwners" => ["orgOwners", "string[]", null, "getOrgOwners", "setOrgOwners", null, ["r" => 0, "c" => 1]], 
        "orgUsersMax" => ["orgUsersMax", "int", null, "getOrgUsersMax", "setOrgUsersMax", 3, ["r" => 0, "n" => [0], "x" => [500]]], 
        "orgUsersCount" => ["orgUsersCount", "int", null, "getOrgUsersCount", "setOrgUsersCount", 1, ["r" => 0, "n" => [0]]], 
        "createdAt" => ["createdAt", "string", null, "getCreatedAt", "setCreatedAt", null, ["r" => 0]], 
        "updatedAt" => ["updatedAt", "string", null, "getUpdatedAt", "setUpdatedAt", null, ["r" => 0]]
    ];

    /**
     * Organization
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get id - Organization ID
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id - Organization ID
     * 
     * @param string|null $id Organization ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
    }

    /**
     * Get orgName - Organization name
     *
     * @return string|null
     */
    public function getOrgName(): ?string {
        return $this->_data["orgName"];
    }

    /**
     * Set orgName - Organization name
     * 
     * @param string|null $org_name Organization name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgName($org_name) {
        return $this->_set("orgName", $org_name);
    }

    /**
     * Get orgIconId - Organization logo ID
     *
     * @return string|null
     */
    public function getOrgIconId(): ?string {
        return $this->_data["orgIconId"];
    }

    /**
     * Set orgIconId - Organization logo ID
     * 
     * @param string|null $org_icon_id Organization logo ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgIconId($org_icon_id) {
        return $this->_set("orgIconId", $org_icon_id);
    }

    /**
     * Get orgOwners - Organization owner IDs
     *
     * @return string[]|null
     */
    public function getOrgOwners(): ?array {
        return $this->_data["orgOwners"];
    }

    /**
     * Set orgOwners - Organization owner IDs
     * 
     * @param string[]|null $org_owners Organization owner IDs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgOwners(?array $org_owners) {
        return $this->_set("orgOwners", $org_owners);
    }

    /**
     * Get orgUsersMax - Maximum number of users in this organization
     *
     * @return int|null
     */
    public function getOrgUsersMax(): ?int {
        return $this->_data["orgUsersMax"];
    }

    /**
     * Set orgUsersMax - Maximum number of users in this organization
     * 
     * @param int|null $org_users_max Maximum number of users in this organization
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgUsersMax($org_users_max) {
        return $this->_set("orgUsersMax", $org_users_max);
    }

    /**
     * Get orgUsersCount - Current number of users in this organization
     *
     * @return int|null
     */
    public function getOrgUsersCount(): ?int {
        return $this->_data["orgUsersCount"];
    }

    /**
     * Set orgUsersCount - Current number of users in this organization
     * 
     * @param int|null $org_users_count Current number of users in this organization
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgUsersCount($org_users_count) {
        return $this->_set("orgUsersCount", $org_users_count);
    }

    /**
     * Get createdAt - Created timestamp
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string {
        return $this->_data["createdAt"];
    }

    /**
     * Set createdAt - Created timestamp
     * 
     * @param string|null $created_at Created timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreatedAt($created_at) {
        return $this->_set("createdAt", $created_at);
    }

    /**
     * Get updatedAt - Updated timestamp
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string {
        return $this->_data["updatedAt"];
    }

    /**
     * Set updatedAt - Updated timestamp
     * 
     * @param string|null $updated_at Updated timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUpdatedAt($updated_at) {
        return $this->_set("updatedAt", $updated_at);
    }
}
