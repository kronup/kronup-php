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
    public const USER_COLOR_CLEAR = 'clear';
    public const USER_COLOR_RED = 'red';
    public const USER_COLOR_ORANGE = 'orange';
    public const USER_COLOR_YELLOW = 'yellow';
    public const USER_COLOR_GREEN = 'green';
    public const USER_COLOR_BLUE = 'blue';
    public const USER_COLOR_PINK = 'pink';
    public const USER_COLOR_VIOLET = 'violet';
    public const ROLE_SITE_FOUNDER = 'founder';
    public const ROLE_SITE_MODERATOR = 'moderator';
    public const ROLE_SITE_USER = 'user';
    protected static $_name = "Account";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "provider" => ["provider", "string", null, "getProvider", "setProvider", null, ["r" => 0]], 
        "userName" => ["userName", "string", null, "getUserName", "setUserName", null, ["r" => 0, "nl" => 3, "xl" => 64]], 
        "userAvatarId" => ["userAvatarId", "string", null, "getUserAvatarId", "setUserAvatarId", null, ["r" => 0]], 
        "userColor" => ["userColor", "string", null, "getUserColor", "setUserColor", null, ["r" => 0, "e" => 1]], 
        "serviceAccount" => ["serviceAccount", "bool", null, "getServiceAccount", "setServiceAccount", false, ["r" => 0]], 
        "puppetAccount" => ["puppetAccount", "bool", null, "getPuppetAccount", "setPuppetAccount", false, ["r" => 0]], 
        "teams" => ["teams", "\Kronup\Model\AccountTeam[]", null, "getTeams", "setTeams", null, ["r" => 0, "c" => 1]], 
        "roleSite" => ["roleSite", "string", null, "getRoleSite", "setRoleSite", null, ["r" => 0, "e" => 1]], 
        "roleOrg" => ["roleOrg", "\Kronup\Model\AccountRoleOrg[]", null, "getRoleOrg", "setRoleOrg", null, ["r" => 0, "c" => 1]], 
        "closedTime" => ["closedTime", "float", null, "getClosedTime", "setClosedTime", 0, ["r" => 0, "n" => [0]]], 
        "createdAt" => ["createdAt", "string", null, "getCreatedAt", "setCreatedAt", null, ["r" => 0]], 
        "updatedAt" => ["updatedAt", "string", null, "getUpdatedAt", "setUpdatedAt", null, ["r" => 0]], 
        "orgs" => ["orgs", "\Kronup\Model\Organization[]", null, "getOrgs", "setOrgs", null, ["r" => 0, "c" => 1]], 
        "orgsTeams" => ["orgsTeams", "\Kronup\Model\OrganizationTeams[]", null, "getOrgsTeams", "setOrgsTeams", null, ["r" => 0, "c" => 1]], 
        "apiCalls" => ["apiCalls", "array<string,float>", null, "getApiCalls", "setApiCalls", null, ["r" => 0, "c" => 1]]
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
    public function getUserColorAllowableValues(): array {
        return [
            self::USER_COLOR_CLEAR,
            self::USER_COLOR_RED,
            self::USER_COLOR_ORANGE,
            self::USER_COLOR_YELLOW,
            self::USER_COLOR_GREEN,
            self::USER_COLOR_BLUE,
            self::USER_COLOR_PINK,
            self::USER_COLOR_VIOLET,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getRoleSiteAllowableValues(): array {
        return [
            self::ROLE_SITE_FOUNDER,
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
     * Get provider - Account provider
     *
     * @return string|null
     */
    public function getProvider(): ?string {
        return $this->_data["provider"];
    }

    /**
     * Set provider - Account provider
     * 
     * @param string|null $provider Account provider
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setProvider($provider) {
        return $this->_set("provider", $provider);
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
     * Get userAvatarId - User avatar ID
     *
     * @return string|null
     */
    public function getUserAvatarId(): ?string {
        return $this->_data["userAvatarId"];
    }

    /**
     * Set userAvatarId - User avatar ID
     * 
     * @param string|null $user_avatar_id User avatar ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAvatarId($user_avatar_id) {
        return $this->_set("userAvatarId", $user_avatar_id);
    }

    /**
     * Get userColor - User profile color
     *
     * @return string|null
     */
    public function getUserColor(): ?string {
        return $this->_data["userColor"];
    }

    /**
     * Set userColor - User profile color
     * 
     * @param string|null $user_color User profile color
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserColor($user_color) {
        return $this->_set("userColor", $user_color);
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
     * Get teams - Account Teams
     *
     * @return \Kronup\Model\AccountTeam[]|null
     */
    public function getTeams(): ?array {
        return $this->_data["teams"];
    }

    /**
     * Set teams - Account Teams
     * 
     * @param \Kronup\Model\AccountTeam[]|null $teams Account Teams
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
     * @return \Kronup\Model\AccountRoleOrg[]|null
     */
    public function getRoleOrg(): ?array {
        return $this->_data["roleOrg"];
    }

    /**
     * Set roleOrg - Organization roles
     * 
     * @param \Kronup\Model\AccountRoleOrg[]|null $role_org Organization roles
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRoleOrg(?array $role_org) {
        return $this->_set("roleOrg", $role_org);
    }

    /**
     * Get closedTime - Account closed UNIX timestamp; 0 means the account is active
     *
     * @return float|null
     */
    public function getClosedTime(): ?float {
        return $this->_data["closedTime"];
    }

    /**
     * Set closedTime - Account closed UNIX timestamp; 0 means the account is active
     * 
     * @param float|null $closed_time Account closed UNIX timestamp; 0 means the account is active
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setClosedTime($closed_time) {
        return $this->_set("closedTime", $closed_time);
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

    /**
     * Get orgsTeams - Organization Teams
     *
     * @return \Kronup\Model\OrganizationTeams[]|null
     */
    public function getOrgsTeams(): ?array {
        return $this->_data["orgsTeams"];
    }

    /**
     * Set orgsTeams - Organization Teams
     * 
     * @param \Kronup\Model\OrganizationTeams[]|null $orgs_teams Organization Teams
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgsTeams(?array $orgs_teams) {
        return $this->_set("orgsTeams", $orgs_teams);
    }

    /**
     * Get apiCalls - List of daily API Calls from this account
     *
     * @return array<string,float>|null
     */
    public function getApiCalls(): ?array {
        return $this->_data["apiCalls"];
    }

    /**
     * Set apiCalls - List of daily API Calls from this account
     * 
     * @param array<string,float>|null $api_calls List of daily API Calls from this account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setApiCalls(?array $api_calls) {
        return $this->_set("apiCalls", $api_calls);
    }
}
