<?php

/**
 * Payload_Invitation_Create Model
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
 * Payload_Invitation_Create Model
 * 
 * Payload object required to create an Invitation
 */
class PayloadInvitationCreate extends AbstractModel {

    public const _D = null;
    public const INVITE_ORG_ROLE_ADMIN = 'admin';
    public const INVITE_ORG_ROLE_MEMBER = 'member';
    protected static $_name = "Payload_Invitation_Create";
    protected static $_definition = [
        "teamId" => ["teamId", "string", null, "getTeamId", "setTeamId", null, ["r" => 1]], 
        "inviteName" => ["inviteName", "string", null, "getInviteName", "setInviteName", null, ["r" => 1, "nl" => 3, "xl" => 64]], 
        "inviteOrgRole" => ["inviteOrgRole", "string", null, "getInviteOrgRole", "setInviteOrgRole", 'member', ["r" => 0, "e" => 1]], 
        "inviteExpireDays" => ["inviteExpireDays", "int", null, "getInviteExpireDays", "setInviteExpireDays", 1, ["r" => 0, "n" => [1], "x" => [30]]], 
        "inviteUsesMax" => ["inviteUsesMax", "int", null, "getInviteUsesMax", "setInviteUsesMax", 0, ["r" => 0, "n" => [0], "x" => [1000]]]
    ];

    /**
     * PayloadInvitationCreate
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
    public function getInviteOrgRoleAllowableValues(): array {
        return [
            self::INVITE_ORG_ROLE_ADMIN,
            self::INVITE_ORG_ROLE_MEMBER,
        ];
    }

    /**
     * Get teamId - Team ID
     *
     * @return string
     */
    public function getTeamId(): string {
        return $this->_data["teamId"];
    }

    /**
     * Set teamId - Team ID
     * 
     * @param string $team_id Team ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTeamId($team_id) {
        return $this->_set("teamId", $team_id);
    }

    /**
     * Get inviteName - Invitation name
     *
     * @return string
     */
    public function getInviteName(): string {
        return $this->_data["inviteName"];
    }

    /**
     * Set inviteName - Invitation name
     * 
     * @param string $invite_name Invitation name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInviteName($invite_name) {
        return $this->_set("inviteName", $invite_name);
    }

    /**
     * Get inviteOrgRole - User role
     *
     * @return string|null
     */
    public function getInviteOrgRole(): ?string {
        return $this->_data["inviteOrgRole"];
    }

    /**
     * Set inviteOrgRole - User role
     * 
     * @param string|null $invite_org_role User role
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInviteOrgRole($invite_org_role) {
        return $this->_set("inviteOrgRole", $invite_org_role);
    }

    /**
     * Get inviteExpireDays - The invitation expires after this many days
     *
     * @return int|null
     */
    public function getInviteExpireDays(): ?int {
        return $this->_data["inviteExpireDays"];
    }

    /**
     * Set inviteExpireDays - The invitation expires after this many days
     * 
     * @param int|null $invite_expire_days The invitation expires after this many days
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInviteExpireDays($invite_expire_days) {
        return $this->_set("inviteExpireDays", $invite_expire_days);
    }

    /**
     * Get inviteUsesMax - The invitation expires after being used this many times. 0 = no limit
     *
     * @return int|null
     */
    public function getInviteUsesMax(): ?int {
        return $this->_data["inviteUsesMax"];
    }

    /**
     * Set inviteUsesMax - The invitation expires after being used this many times. 0 = no limit
     * 
     * @param int|null $invite_uses_max The invitation expires after being used this many times. 0 = no limit
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInviteUsesMax($invite_uses_max) {
        return $this->_set("inviteUsesMax", $invite_uses_max);
    }
}
