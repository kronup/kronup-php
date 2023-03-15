<?php

/**
 * ValueItemExpanded Model
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
 * ValueItemExpanded Model
 */
class ValueItemExpanded extends AbstractModel {

    public const _D = null;
    public const STAGE_PLANNING = 'planning';
    public const STAGE_VALIDATION = 'validation';
    public const STAGE_EXECUTION = 'execution';
    public const STAGE_DEEP_CONTEXT = 'deep context';
    public const TYPE_FEATURE = 'feature';
    public const TYPE_BUG_FIX = 'bug fix';
    public const TYPE_CHORE = 'chore';
    public const PRIORITY_MUST = 'must';
    public const PRIORITY_SHOULD = 'should';
    public const PRIORITY_COULD = 'could';
    public const PRIORITY_WILL_NOT = 'will not';
    protected static $_name = "ValueItemExpanded";
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
        "tasks" => ["tasks", "\Kronup\Model\TaskExpanded[]", null, "getTasks", "setTasks", null, ["r" => 0, "c" => 1]], 
        "createdAt" => ["createdAt", "string", null, "getCreatedAt", "setCreatedAt", null, ["r" => 0]], 
        "updatedAt" => ["updatedAt", "string", null, "getUpdatedAt", "setUpdatedAt", null, ["r" => 0]]
    ];

    /**
     * ValueItemExpanded
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
            self::STAGE_PLANNING,
            self::STAGE_VALIDATION,
            self::STAGE_EXECUTION,
            self::STAGE_DEEP_CONTEXT,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_FEATURE,
            self::TYPE_BUG_FIX,
            self::TYPE_CHORE,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getPriorityAllowableValues(): array {
        return [
            self::PRIORITY_MUST,
            self::PRIORITY_SHOULD,
            self::PRIORITY_COULD,
            self::PRIORITY_WILL_NOT,
        ];
    }

    /**
     * Get id - Value item ID
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id - Value item ID
     * 
     * @param string|null $id Value item ID
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
     * Get digest - Value item digest
     *
     * @return string|null
     */
    public function getDigest(): ?string {
        return $this->_data["digest"];
    }

    /**
     * Set digest - Value item digest
     * 
     * @param string|null $digest Value item digest
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDigest($digest) {
        return $this->_set("digest", $digest);
    }

    /**
     * Get details - Value item description
     *
     * @return string|null
     */
    public function getDetails(): ?string {
        return $this->_data["details"];
    }

    /**
     * Set details - Value item description
     * 
     * @param string|null $details Value item description
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDetails($details) {
        return $this->_set("details", $details);
    }

    /**
     * Get authorId - Author ID
     *
     * @return string|null
     */
    public function getAuthorId(): ?string {
        return $this->_data["authorId"];
    }

    /**
     * Set authorId - Author ID
     * 
     * @param string|null $author_id Author ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthorId($author_id) {
        return $this->_set("authorId", $author_id);
    }

    /**
     * Get stage - Value Item Stage
     *
     * @return string|null
     */
    public function getStage(): ?string {
        return $this->_data["stage"];
    }

    /**
     * Set stage - Value Item Stage
     * 
     * @param string|null $stage Value Item Stage
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStage($stage) {
        return $this->_set("stage", $stage);
    }

    /**
     * Get canAdvance - Conditions for Value Items to advance to the next stage:    * `planning` - at least 1 Assumption was added   * `validation` - all Assumption experiments were marked as `done`   * `execution` - all Tasks were marked as `done`   * `deep context` - Value Items become read-only; they can only be deleted by an Organization manager or administrator
     *
     * @return bool|null
     */
    public function getCanAdvance(): ?bool {
        return $this->_data["canAdvance"];
    }

    /**
     * Set canAdvance - Conditions for Value Items to advance to the next stage:    * `planning` - at least 1 Assumption was added   * `validation` - all Assumption experiments were marked as `done`   * `execution` - all Tasks were marked as `done`   * `deep context` - Value Items become read-only; they can only be deleted by an Organization manager or administrator
     * 
     * @param bool|null $can_advance Conditions for Value Items to advance to the next stage:    * `planning` - at least 1 Assumption was added   * `validation` - all Assumption experiments were marked as `done`   * `execution` - all Tasks were marked as `done`   * `deep context` - Value Items become read-only; they can only be deleted by an Organization manager or administrator
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCanAdvance($can_advance) {
        return $this->_set("canAdvance", $can_advance);
    }

    /**
     * Get type - Value Item Type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type - Value Item Type
     * 
     * @param string|null $type Value Item Type
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType($type) {
        return $this->_set("type", $type);
    }

    /**
     * Get priority - Value Item Priority using MoSCoW
     *
     * @return string|null
     */
    public function getPriority(): ?string {
        return $this->_data["priority"];
    }

    /**
     * Set priority - Value Item Priority using MoSCoW
     * 
     * @param string|null $priority Value Item Priority using MoSCoW
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPriority($priority) {
        return $this->_set("priority", $priority);
    }

    /**
     * Get assumptions - Assumptions
     *
     * @return \Kronup\Model\Assumption[]|null
     */
    public function getAssumptions(): ?array {
        return $this->_data["assumptions"];
    }

    /**
     * Set assumptions - Assumptions
     * 
     * @param \Kronup\Model\Assumption[]|null $assumptions Assumptions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssumptions(?array $assumptions) {
        return $this->_set("assumptions", $assumptions);
    }

    /**
     * Get tasks - List of expanded Tasks
     *
     * @return \Kronup\Model\TaskExpanded[]|null
     */
    public function getTasks(): ?array {
        return $this->_data["tasks"];
    }

    /**
     * Set tasks - List of expanded Tasks
     * 
     * @param \Kronup\Model\TaskExpanded[]|null $tasks List of expanded Tasks
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTasks(?array $tasks) {
        return $this->_set("tasks", $tasks);
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
