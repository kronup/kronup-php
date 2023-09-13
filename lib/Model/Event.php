<?php

/**
 * Event Model
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
 * Event Model
 */
class Event extends AbstractModel {

    public const _D = null;
    public const TYPE_FEATURES = 'features';
    public const TYPE_ASSUMPTIONS = 'assumptions';
    public const TYPE_TASKS = 'tasks';
    public const TYPE_SELF_EVALUATION = 'self-evaluation';
    public const TYPE_PEER_EVALUATION = 'peer evaluation';
    public const STAGE_PLANNING = 'planning';
    public const STAGE_VALIDATION = 'validation';
    public const STAGE_EXECUTION = 'execution';
    public const STAGE_DEEP_CONTEXT = 'deep context';
    protected static $_name = "Event";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 0, "e" => 1]], 
        "teamId" => ["teamId", "string", null, "getTeamId", "setTeamId", null, ["r" => 0]], 
        "channelId" => ["channelId", "string", null, "getChannelId", "setChannelId", null, ["r" => 0]], 
        "notionId" => ["notionId", "string", null, "getNotionId", "setNotionId", null, ["r" => 0]], 
        "peerUserId" => ["peerUserId", "string", null, "getPeerUserId", "setPeerUserId", null, ["r" => 0]], 
        "featureId" => ["featureId", "string", null, "getFeatureId", "setFeatureId", null, ["r" => 0]], 
        "assmId" => ["assmId", "string", null, "getAssmId", "setAssmId", null, ["r" => 0]], 
        "taskId" => ["taskId", "string", null, "getTaskId", "setTaskId", null, ["r" => 0]], 
        "diff" => ["diff", "string[]", null, "getDiff", "setDiff", null, ["r" => 0, "c" => 1]], 
        "stage" => ["stage", "string", null, "getStage", "setStage", null, ["r" => 0, "e" => 1]]
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
            self::TYPE_FEATURES,
            self::TYPE_ASSUMPTIONS,
            self::TYPE_TASKS,
            self::TYPE_SELF_EVALUATION,
            self::TYPE_PEER_EVALUATION,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getStageAllowableValues(): array {
        return [
            self::STAGE_PLANNING,
            self::STAGE_VALIDATION,
            self::STAGE_EXECUTION,
            self::STAGE_DEEP_CONTEXT,
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
     * Get peerUserId - Peers User ID
     *
     * @return string|null
     */
    public function getPeerUserId(): ?string {
        return $this->_data["peerUserId"];
    }

    /**
     * Set peerUserId - Peers User ID
     * 
     * @param string|null $peer_user_id Peers User ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPeerUserId($peer_user_id) {
        return $this->_set("peerUserId", $peer_user_id);
    }

    /**
     * Get featureId - Feature ID
     *
     * @return string|null
     */
    public function getFeatureId(): ?string {
        return $this->_data["featureId"];
    }

    /**
     * Set featureId - Feature ID
     * 
     * @param string|null $feature_id Feature ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeatureId($feature_id) {
        return $this->_set("featureId", $feature_id);
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
     * Get stage - Feature Stage
     *
     * @return string|null
     */
    public function getStage(): ?string {
        return $this->_data["stage"];
    }

    /**
     * Set stage - Feature Stage
     * 
     * @param string|null $stage Feature Stage
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStage($stage) {
        return $this->_set("stage", $stage);
    }
}
