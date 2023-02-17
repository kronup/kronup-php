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
        "user_email" => ["userEmail", "string", null, "getUserEmail", "setUserEmail", null, ["r" => 0]], 
        "user_name" => ["userName", "string", null, "getUserName", "setUserName", null, ["r" => 0]], 
        "user_icon" => ["userIcon", "string", null, "getUserIcon", "setUserIcon", null, ["r" => 0]], 
        "user_token_iat" => ["userTokenIat", "int", null, "getUserTokenIat", "setUserTokenIat", null, ["r" => 0]], 
        "role_site" => ["roleSite", "string", null, "getRoleSite", "setRoleSite", null, ["r" => 0, "e" => 1]], 
        "role_org" => ["roleOrg", "\Kronup\Model\AccountRoleOrgInner[]", null, "getRoleOrg", "setRoleOrg", null, ["r" => 0, "c" => 1]], 
        "created_at" => ["createdAt", "string", null, "getCreatedAt", "setCreatedAt", null, ["r" => 0]], 
        "updated_at" => ["updatedAt", "string", null, "getUpdatedAt", "setUpdatedAt", null, ["r" => 0]], 
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
    public function setId( $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get user_email
     *
     * @return string|null
     */
    public function getUserEmail(): ?string {
        return $this->_data["user_email"];
    }

    /**
     * Set user_email
     * 
     * @param string|null $user_email User e-mail address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserEmail( $user_email) {
        return $this->_set("user_email", $user_email);
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
     * @param string|null $user_name User name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserName( $user_name) {
        return $this->_set("user_name", $user_name);
    }

    /**
     * Get user_icon
     *
     * @return string|null
     */
    public function getUserIcon(): ?string {
        return $this->_data["user_icon"];
    }

    /**
     * Set user_icon
     * 
     * @param string|null $user_icon User icon URL
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserIcon( $user_icon) {
        return $this->_set("user_icon", $user_icon);
    }

    /**
     * Get user_token_iat
     *
     * @return int|null
     */
    public function getUserTokenIat(): ?int {
        return $this->_data["user_token_iat"];
    }

    /**
     * Set user_token_iat
     * 
     * @param int|null $user_token_iat User token creation timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserTokenIat( $user_token_iat) {
        return $this->_set("user_token_iat", $user_token_iat);
    }

    /**
     * Get role_site
     *
     * @return string|null
     */
    public function getRoleSite(): ?string {
        return $this->_data["role_site"];
    }

    /**
     * Set role_site
     * 
     * @param string|null $role_site User site role
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRoleSite( $role_site) {
        return $this->_set("role_site", $role_site);
    }

    /**
     * Get role_org
     *
     * @return \Kronup\Model\AccountRoleOrgInner[]|null
     */
    public function getRoleOrg(): ?array {
        return $this->_data["role_org"];
    }

    /**
     * Set role_org
     * 
     * @param \Kronup\Model\AccountRoleOrgInner[]|null $role_org role_org
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRoleOrg(?array $role_org) {
        return $this->_set("role_org", $role_org);
    }

    /**
     * Get created_at
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string {
        return $this->_data["created_at"];
    }

    /**
     * Set created_at
     * 
     * @param string|null $created_at Created timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreatedAt( $created_at) {
        return $this->_set("created_at", $created_at);
    }

    /**
     * Get updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string {
        return $this->_data["updated_at"];
    }

    /**
     * Set updated_at
     * 
     * @param string|null $updated_at Updated timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUpdatedAt( $updated_at) {
        return $this->_set("updated_at", $updated_at);
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
     * @param \Kronup\Model\Organization[]|null $orgs orgs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgs(?array $orgs) {
        return $this->_set("orgs", $orgs);
    }
}
