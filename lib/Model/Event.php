<?php

/**
 * Event Model
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
 * Event Model
 */
class Event extends AbstractModel {

    public const _D = null;
    public const TYPE_ITEMS = 'items';
    public const TYPE_ASSUMPTIONS = 'assumptions';
    public const TYPE_TASKS = 'tasks';
    public const TYPE_SELF_EVALUATION = 'self-evaluation';
    public const TYPE_PEER_EVALUATION = 'peer evaluation';
    protected static $_name = "Event";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "orgId" => ["orgId", "string", null, "getOrgId", "setOrgId", null, ["r" => 0]], 
        "userId" => ["userId", "string", null, "getUserId", "setUserId", null, ["r" => 0]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 0, "e" => 1]], 
        "teamId" => ["teamId", "string", null, "getTeamId", "setTeamId", null, ["r" => 0]], 
        "channelId" => ["channelId", "string", null, "getChannelId", "setChannelId", null, ["r" => 0]], 
        "notionId" => ["notionId", "string", null, "getNotionId", "setNotionId", null, ["r" => 0]], 
        "peerUserId" => ["peerUserId", "string", null, "getPeerUserId", "setPeerUserId", null, ["r" => 0]], 
        "itemId" => ["itemId", "string", null, "getItemId", "setItemId", null, ["r" => 0]], 
        "assmId" => ["assmId", "string", null, "getAssmId", "setAssmId", null, ["r" => 0]], 
        "taskId" => ["taskId", "string", null, "getTaskId", "setTaskId", null, ["r" => 0]], 
        "diff" => ["diff", "string[]", null, "getDiff", "setDiff", null, ["r" => 0, "c" => 1]], 
        "createdAt" => ["createdAt", "string", null, "getCreatedAt", "setCreatedAt", null, ["r" => 0]], 
        "updatedAt" => ["updatedAt", "string", null, "getUpdatedAt", "setUpdatedAt", null, ["r" => 0]]
    ];

    /**
     * Event
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
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_ITEMS,
            self::TYPE_ASSUMPTIONS,
            self::TYPE_TASKS,
            self::TYPE_SELF_EVALUATION,
            self::TYPE_PEER_EVALUATION,
        ];
    }

    /**
     * Get id - Event ID
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id - Event ID
     * 
     * @param string|null $id Event ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
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
     * Get userId - User ID
     *
     * @return string|null
     */
    public function getUserId(): ?string {
        return $this->_data["userId"];
    }

    /**
     * Set userId - User ID
     * 
     * @param string|null $user_id User ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserId($user_id) {
        return $this->_set("userId", $user_id);
    }

    /**
     * Get type - Event type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type - Event type
     * 
     * @param string|null $type Event type
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType($type) {
        return $this->_set("type", $type);
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
     * Get channelId - Channel ID
     *
     * @return string|null
     */
    public function getChannelId(): ?string {
        return $this->_data["channelId"];
    }

    /**
     * Set channelId - Channel ID
     * 
     * @param string|null $channel_id Channel ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChannelId($channel_id) {
        return $this->_set("channelId", $channel_id);
    }

    /**
     * Get notionId - Notion ID
     *
     * @return string|null
     */
    public function getNotionId(): ?string {
        return $this->_data["notionId"];
    }

    /**
     * Set notionId - Notion ID
     * 
     * @param string|null $notion_id Notion ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNotionId($notion_id) {
        return $this->_set("notionId", $notion_id);
    }

    /**
     * Get peerUserId - Peer User ID
     *
     * @return string|null
     */
    public function getPeerUserId(): ?string {
        return $this->_data["peerUserId"];
    }

    /**
     * Set peerUserId - Peer User ID
     * 
     * @param string|null $peer_user_id Peer User ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPeerUserId($peer_user_id) {
        return $this->_set("peerUserId", $peer_user_id);
    }

    /**
     * Get itemId - Item ID
     *
     * @return string|null
     */
    public function getItemId(): ?string {
        return $this->_data["itemId"];
    }

    /**
     * Set itemId - Item ID
     * 
     * @param string|null $item_id Item ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setItemId($item_id) {
        return $this->_set("itemId", $item_id);
    }

    /**
     * Get assmId - Assumption ID
     *
     * @return string|null
     */
    public function getAssmId(): ?string {
        return $this->_data["assmId"];
    }

    /**
     * Set assmId - Assumption ID
     * 
     * @param string|null $assm_id Assumption ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssmId($assm_id) {
        return $this->_set("assmId", $assm_id);
    }

    /**
     * Get taskId - Task ID
     *
     * @return string|null
     */
    public function getTaskId(): ?string {
        return $this->_data["taskId"];
    }

    /**
     * Set taskId - Task ID
     * 
     * @param string|null $task_id Task ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTaskId($task_id) {
        return $this->_set("taskId", $task_id);
    }

    /**
     * Get diff - Difference
     *
     * @return string[]|null
     */
    public function getDiff(): ?array {
        return $this->_data["diff"];
    }

    /**
     * Set diff - Difference
     * 
     * @param string[]|null $diff Difference
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDiff(?array $diff) {
        return $this->_set("diff", $diff);
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
