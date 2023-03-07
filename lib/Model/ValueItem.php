<?php

/**
 * ValueItem Model
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
 * ValueItem Model
 */
class ValueItem extends AbstractModel {

    public const _D = null;
    public const STAGE_P = 'p';
    public const STAGE_V = 'v';
    public const STAGE_X = 'x';
    public const STAGE_C = 'c';
    public const TYPE_F = 'f';
    public const TYPE_B = 'b';
    public const TYPE_C = 'c';
    public const PRIORITY_M = 'm';
    public const PRIORITY_S = 's';
    public const PRIORITY_C = 'c';
    public const PRIORITY_W = 'w';
    protected static $_name = "ValueItem";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "orgId" => ["orgId", "string", null, "getOrgId", "setOrgId", null, ["r" => 0]], 
        "teamId" => ["teamId", "string", null, "getTeamId", "setTeamId", null, ["r" => 0]], 
        "channelId" => ["channelId", "string", null, "getChannelId", "setChannelId", null, ["r" => 0]], 
        "digest" => ["digest", "string", null, "getDigest", "setDigest", null, ["r" => 0, "nl" => 1, "xl" => 256]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 4096]], 
        "authorId" => ["authorId", "string", null, "getAuthorId", "setAuthorId", null, ["r" => 0]], 
        "stage" => ["stage", "string", null, "getStage", "setStage", null, ["r" => 0, "e" => 1]], 
        "canAdvance" => ["canAdvance", "bool", null, "getCanAdvance", "setCanAdvance", false, ["r" => 0]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 0, "e" => 1]], 
        "priority" => ["priority", "string", null, "getPriority", "setPriority", null, ["r" => 0, "e" => 1]], 
        "assumptions" => ["assumptions", "\Kronup\Model\Assumption[]", null, "getAssumptions", "setAssumptions", null, ["r" => 0, "c" => 1]], 
        "tasks" => ["tasks", "\Kronup\Model\Task[]", null, "getTasks", "setTasks", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * ValueItem
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
    public function getStageAllowableValues(): array {
        return [
            self::STAGE_P,
            self::STAGE_V,
            self::STAGE_X,
            self::STAGE_C,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_F,
            self::TYPE_B,
            self::TYPE_C,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getPriorityAllowableValues(): array {
        return [
            self::PRIORITY_M,
            self::PRIORITY_S,
            self::PRIORITY_C,
            self::PRIORITY_W,
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
     * @param string|null $id Value item ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
    }

    /**
     * Get orgId
     *
     * @return string|null
     */
    public function getOrgId(): ?string {
        return $this->_data["orgId"];
    }

    /**
     * Set orgId
     * 
     * @param string|null $org_id Organization ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgId($org_id) {
        return $this->_set("orgId", $org_id);
    }

    /**
     * Get teamId
     *
     * @return string|null
     */
    public function getTeamId(): ?string {
        return $this->_data["teamId"];
    }

    /**
     * Set teamId
     * 
     * @param string|null $team_id Team ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTeamId($team_id) {
        return $this->_set("teamId", $team_id);
    }

    /**
     * Get channelId
     *
     * @return string|null
     */
    public function getChannelId(): ?string {
        return $this->_data["channelId"];
    }

    /**
     * Set channelId
     * 
     * @param string|null $channel_id Channel ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChannelId($channel_id) {
        return $this->_set("channelId", $channel_id);
    }

    /**
     * Get digest
     *
     * @return string|null
     */
    public function getDigest(): ?string {
        return $this->_data["digest"];
    }

    /**
     * Set digest
     * 
     * @param string|null $digest Value item digest
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDigest($digest) {
        return $this->_set("digest", $digest);
    }

    /**
     * Get details
     *
     * @return string|null
     */
    public function getDetails(): ?string {
        return $this->_data["details"];
    }

    /**
     * Set details
     * 
     * @param string|null $details Value item description
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDetails($details) {
        return $this->_set("details", $details);
    }

    /**
     * Get authorId
     *
     * @return string|null
     */
    public function getAuthorId(): ?string {
        return $this->_data["authorId"];
    }

    /**
     * Set authorId
     * 
     * @param string|null $author_id Author ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthorId($author_id) {
        return $this->_set("authorId", $author_id);
    }

    /**
     * Get stage
     *
     * @return string|null
     */
    public function getStage(): ?string {
        return $this->_data["stage"];
    }

    /**
     * Set stage
     * 
     * @param string|null $stage Value Item Stage    * `p` - Planning   * `v` - Validation   * `x` - Execution   * `c` - Deep Context
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStage($stage) {
        return $this->_set("stage", $stage);
    }

    /**
     * Get canAdvance
     *
     * @return bool|null
     */
    public function getCanAdvance(): ?bool {
        return $this->_data["canAdvance"];
    }

    /**
     * Set canAdvance
     * 
     * @param bool|null $can_advance Value Item can advance to the next stage   * In Planning: at least 1 Assumption was added   * In Validation: all Assumptions were validated   * In Execution: all Tasks were completed
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCanAdvance($can_advance) {
        return $this->_set("canAdvance", $can_advance);
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type Value Item Type    * `f` - Feature   * `b` - Bug fix   * `c` - Chore
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType($type) {
        return $this->_set("type", $type);
    }

    /**
     * Get priority
     *
     * @return string|null
     */
    public function getPriority(): ?string {
        return $this->_data["priority"];
    }

    /**
     * Set priority
     * 
     * @param string|null $priority Value Item Priority using MoSCoW    * `m` - Must-have   * `s` - Should-have   * `c` - Could-have   * `w` - Will NOT have
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPriority($priority) {
        return $this->_set("priority", $priority);
    }

    /**
     * Get assumptions
     *
     * @return \Kronup\Model\Assumption[]|null
     */
    public function getAssumptions(): ?array {
        return $this->_data["assumptions"];
    }

    /**
     * Set assumptions
     * 
     * @param \Kronup\Model\Assumption[]|null $assumptions Assumptions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssumptions(?array $assumptions) {
        return $this->_set("assumptions", $assumptions);
    }

    /**
     * Get tasks
     *
     * @return \Kronup\Model\Task[]|null
     */
    public function getTasks(): ?array {
        return $this->_data["tasks"];
    }

    /**
     * Set tasks
     * 
     * @param \Kronup\Model\Task[]|null $tasks List of Tasks without Minutes
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTasks(?array $tasks) {
        return $this->_set("tasks", $tasks);
    }
}
