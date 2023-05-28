<?php

/**
 * Account_Team Model
 *
 * @copyright (c) 2022-2023 kronup.io
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://kronup.io/
 *
 * NOTE: This class is auto-generated by kronup.io
 * Do not edit this file manually!
 */

namespace Kronup\Model;
!defined("KRONUP-SDK") && exit();

/**
 * Account_Team Model
 */
class AccountTeam extends AbstractModel {

    public const _D = null;
    protected static $_name = "Account_Team";
    protected static $_definition = [
        "orgId" => ["orgId", "string", null, "getOrgId", "setOrgId", null, ["r" => 0]], 
        "teamId" => ["teamId", "string", null, "getTeamId", "setTeamId", null, ["r" => 0]], 
        "channelIds" => ["channelIds", "string[]", null, "getChannelIds", "setChannelIds", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * AccountTeam
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get orgId - Organization ID
     *
     * @return string|null
     */
    public function getOrgId(): ?string {
        return $this->_data["orgId"];
    }

    /**
     * Set orgId - Organization ID
     * 
     * @param string|null $org_id Organization ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgId($org_id) {
        return $this->_set("orgId", $org_id);
    }

    /**
     * Get teamId - Team ID
     *
     * @return string|null
     */
    public function getTeamId(): ?string {
        return $this->_data["teamId"];
    }

    /**
     * Set teamId - Team ID
     * 
     * @param string|null $team_id Team ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTeamId($team_id) {
        return $this->_set("teamId", $team_id);
    }

    /**
     * Get channelIds - Channels IDs
     *
     * @return string[]|null
     */
    public function getChannelIds(): ?array {
        return $this->_data["channelIds"];
    }

    /**
     * Set channelIds - Channels IDs
     * 
     * @param string[]|null $channel_ids Channels IDs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChannelIds(?array $channel_ids) {
        return $this->_set("channelIds", $channel_ids);
    }
}
