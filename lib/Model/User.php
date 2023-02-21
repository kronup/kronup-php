<?php

/**
 * User Model
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
 * User Model
 */
class User extends AbstractModel {

    public const _D = null;
    public const ROLE_SITE_ADMIN = 'admin';
    public const ROLE_SITE_MODERATOR = 'moderator';
    public const ROLE_SITE_USER = 'user';
    protected static $_name = "User";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "userEmail" => ["userEmail", "string", null, "getUserEmail", "setUserEmail", null, ["r" => 0]], 
        "userName" => ["userName", "string", null, "getUserName", "setUserName", null, ["r" => 0]], 
        "userIcon" => ["userIcon", "string", null, "getUserIcon", "setUserIcon", null, ["r" => 0]], 
        "userTokenIat" => ["userTokenIat", "int", null, "getUserTokenIat", "setUserTokenIat", null, ["r" => 0]], 
        "roleSite" => ["roleSite", "string", null, "getRoleSite", "setRoleSite", null, ["r" => 0, "e" => 1]], 
        "roleOrg" => ["roleOrg", "\Kronup\Model\AccountRoleOrg[]", null, "getRoleOrg", "setRoleOrg", null, ["r" => 0, "c" => 1]], 
        "projects" => ["projects", "string[]", null, "getProjects", "setProjects", null, ["r" => 0, "c" => 1]], 
        "teams" => ["teams", "string[]", null, "getTeams", "setTeams", null, ["r" => 0, "c" => 1]], 
        "createdAt" => ["createdAt", "string", null, "getCreatedAt", "setCreatedAt", null, ["r" => 0]], 
        "updatedAt" => ["updatedAt", "string", null, "getUpdatedAt", "setUpdatedAt", null, ["r" => 0]], 
        "orgs" => ["orgs", "\Kronup\Model\Organization[]", null, "getOrgs", "setOrgs", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * User
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
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id User ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
    }

    /**
     * Get userEmail
     *
     * @return string|null
     */
    public function getUserEmail(): ?string {
        return $this->_data["userEmail"];
    }

    /**
     * Set userEmail
     * 
     * @param string|null $user_email User e-mail address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserEmail($user_email) {
        return $this->_set("userEmail", $user_email);
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
     * @param string|null $user_name User name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserName($user_name) {
        return $this->_set("userName", $user_name);
    }

    /**
     * Get userIcon
     *
     * @return string|null
     */
    public function getUserIcon(): ?string {
        return $this->_data["userIcon"];
    }

    /**
     * Set userIcon
     * 
     * @param string|null $user_icon User icon URL
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserIcon($user_icon) {
        return $this->_set("userIcon", $user_icon);
    }

    /**
     * Get userTokenIat
     *
     * @return int|null
     */
    public function getUserTokenIat(): ?int {
        return $this->_data["userTokenIat"];
    }

    /**
     * Set userTokenIat
     * 
     * @param int|null $user_token_iat User token creation timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserTokenIat($user_token_iat) {
        return $this->_set("userTokenIat", $user_token_iat);
    }

    /**
     * Get roleSite
     *
     * @return string|null
     */
    public function getRoleSite(): ?string {
        return $this->_data["roleSite"];
    }

    /**
     * Set roleSite
     * 
     * @param string|null $role_site User site role
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRoleSite($role_site) {
        return $this->_set("roleSite", $role_site);
    }

    /**
     * Get roleOrg
     *
     * @return \Kronup\Model\AccountRoleOrg[]|null
     */
    public function getRoleOrg(): ?array {
        return $this->_data["roleOrg"];
    }

    /**
     * Set roleOrg
     * 
     * @param \Kronup\Model\AccountRoleOrg[]|null $role_org
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRoleOrg(?array $role_org) {
        return $this->_set("roleOrg", $role_org);
    }

    /**
     * Get projects
     *
     * @return string[]|null
     */
    public function getProjects(): ?array {
        return $this->_data["projects"];
    }

    /**
     * Set projects
     * 
     * @param string[]|null $projects
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setProjects(?array $projects) {
        return $this->_set("projects", $projects);
    }

    /**
     * Get teams
     *
     * @return string[]|null
     */
    public function getTeams(): ?array {
        return $this->_data["teams"];
    }

    /**
     * Set teams
     * 
     * @param string[]|null $teams
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTeams(?array $teams) {
        return $this->_set("teams", $teams);
    }

    /**
     * Get createdAt
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string {
        return $this->_data["createdAt"];
    }

    /**
     * Set createdAt
     * 
     * @param string|null $created_at Created timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreatedAt($created_at) {
        return $this->_set("createdAt", $created_at);
    }

    /**
     * Get updatedAt
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string {
        return $this->_data["updatedAt"];
    }

    /**
     * Set updatedAt
     * 
     * @param string|null $updated_at Updated timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUpdatedAt($updated_at) {
        return $this->_set("updatedAt", $updated_at);
    }

    /**
     * Get orgs
     *
     * @return \Kronup\Model\Organization[]|null
     */
    public function getOrgs(): ?array {
        return $this->_data["orgs"];
    }

    /**
     * Set orgs
     * 
     * @param \Kronup\Model\Organization[]|null $orgs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgs(?array $orgs) {
        return $this->_set("orgs", $orgs);
    }
}
