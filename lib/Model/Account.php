<?php

/**
 * Account Model
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
 * Account Model
 */
class Account extends AbstractModel {

    public const _D = null;
    public const ROLE_SITE_ADMIN = 'admin';
    public const ROLE_SITE_MODERATOR = 'moderator';
    public const ROLE_SITE_USER = 'user';
    protected static $_name = "Account";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "userEmail" => ["userEmail", "string", null, "getUserEmail", "setUserEmail", null, ["r" => 0]], 
        "userName" => ["userName", "string", null, "getUserName", "setUserName", null, ["r" => 0, "nl" => 3, "xl" => 64]], 
        "userIcon" => ["userIcon", "string", null, "getUserIcon", "setUserIcon", null, ["r" => 0]], 
        "serviceAccount" => ["serviceAccount", "bool", null, "getServiceAccount", "setServiceAccount", false, ["r" => 0]], 
        "puppetAccount" => ["puppetAccount", "bool", null, "getPuppetAccount", "setPuppetAccount", false, ["r" => 0]], 
        "teams" => ["teams", "\Kronup\Model\UserTeam[]", null, "getTeams", "setTeams", null, ["r" => 0, "c" => 1]], 
        "roleSite" => ["roleSite", "string", null, "getRoleSite", "setRoleSite", null, ["r" => 0, "e" => 1]], 
        "roleOrg" => ["roleOrg", "\Kronup\Model\UserRoleOrg[]", null, "getRoleOrg", "setRoleOrg", null, ["r" => 0, "c" => 1]], 
        "createdAt" => ["createdAt", "string", null, "getCreatedAt", "setCreatedAt", null, ["r" => 0]], 
        "updatedAt" => ["updatedAt", "string", null, "getUpdatedAt", "setUpdatedAt", null, ["r" => 0]], 
        "orgs" => ["orgs", "\Kronup\Model\Organization[]", null, "getOrgs", "setOrgs", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * Account
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
    public function getRoleSiteAllowableValues(): array {
        return [
            self::ROLE_SITE_ADMIN,
            self::ROLE_SITE_MODERATOR,
            self::ROLE_SITE_USER,
        ];
    }

    /**
     * Get id - User ID
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id - User ID
     * 
     * @param string|null $id User ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
    }

    /**
     * Get userEmail - User e-mail address
     *
     * @return string|null
     */
    public function getUserEmail(): ?string {
        return $this->_data["userEmail"];
    }

    /**
     * Set userEmail - User e-mail address
     * 
     * @param string|null $user_email User e-mail address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserEmail($user_email) {
        return $this->_set("userEmail", $user_email);
    }

    /**
     * Get userName - User name
     *
     * @return string|null
     */
    public function getUserName(): ?string {
        return $this->_data["userName"];
    }

    /**
     * Set userName - User name
     * 
     * @param string|null $user_name User name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserName($user_name) {
        return $this->_set("userName", $user_name);
    }

    /**
     * Get userIcon - User icon URL
     *
     * @return string|null
     */
    public function getUserIcon(): ?string {
        return $this->_data["userIcon"];
    }

    /**
     * Set userIcon - User icon URL
     * 
     * @param string|null $user_icon User icon URL
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserIcon($user_icon) {
        return $this->_set("userIcon", $user_icon);
    }

    /**
     * Get serviceAccount - Service accounts can only perform actions through API calls
     *
     * @return bool|null
     */
    public function getServiceAccount(): ?bool {
        return $this->_data["serviceAccount"];
    }

    /**
     * Set serviceAccount - Service accounts can only perform actions through API calls
     * 
     * @param bool|null $service_account Service accounts can only perform actions through API calls
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setServiceAccount($service_account) {
        return $this->_set("serviceAccount", $service_account);
    }

    /**
     * Get puppetAccount - Puppet accounts replace users removed from organizations. Puppets can no longer perform any actions
     *
     * @return bool|null
     */
    public function getPuppetAccount(): ?bool {
        return $this->_data["puppetAccount"];
    }

    /**
     * Set puppetAccount - Puppet accounts replace users removed from organizations. Puppets can no longer perform any actions
     * 
     * @param bool|null $puppet_account Puppet accounts replace users removed from organizations. Puppets can no longer perform any actions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPuppetAccount($puppet_account) {
        return $this->_set("puppetAccount", $puppet_account);
    }

    /**
     * Get teams - User Teams
     *
     * @return \Kronup\Model\UserTeam[]|null
     */
    public function getTeams(): ?array {
        return $this->_data["teams"];
    }

    /**
     * Set teams - User Teams
     * 
     * @param \Kronup\Model\UserTeam[]|null $teams User Teams
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTeams(?array $teams) {
        return $this->_set("teams", $teams);
    }

    /**
     * Get roleSite - User site role
     *
     * @return string|null
     */
    public function getRoleSite(): ?string {
        return $this->_data["roleSite"];
    }

    /**
     * Set roleSite - User site role
     * 
     * @param string|null $role_site User site role
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRoleSite($role_site) {
        return $this->_set("roleSite", $role_site);
    }

    /**
     * Get roleOrg - Organization roles
     *
     * @return \Kronup\Model\UserRoleOrg[]|null
     */
    public function getRoleOrg(): ?array {
        return $this->_data["roleOrg"];
    }

    /**
     * Set roleOrg - Organization roles
     * 
     * @param \Kronup\Model\UserRoleOrg[]|null $role_org Organization roles
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRoleOrg(?array $role_org) {
        return $this->_set("roleOrg", $role_org);
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

    /**
     * Get orgs - Organizations
     *
     * @return \Kronup\Model\Organization[]|null
     */
    public function getOrgs(): ?array {
        return $this->_data["orgs"];
    }

    /**
     * Set orgs - Organizations
     * 
     * @param \Kronup\Model\Organization[]|null $orgs Organizations
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgs(?array $orgs) {
        return $this->_set("orgs", $orgs);
    }
}
