<?php

/**
 * Task Model
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
 * Task Model
 * 
 * Task model without Minutes
 */
class Task extends AbstractModel {

    public const _D = null;
    public const STATE_IDLE = 'idle';
    public const STATE_IN_PROGRESS = 'in progress';
    public const STATE_IN_REVIEW = 'in review';
    public const STATE_DONE = 'done';
    protected static $_name = "Task";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "assigneeId" => ["assigneeId", "string", null, "getAssigneeId", "setAssigneeId", null, ["r" => 0]], 
        "digest" => ["digest", "string", null, "getDigest", "setDigest", null, ["r" => 0, "nl" => 1, "xl" => 256]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 4096]], 
        "state" => ["state", "string", null, "getState", "setState", 'idle', ["r" => 0, "e" => 1]], 
        "notionIds" => ["notionIds", "string[]", null, "getNotionIds", "setNotionIds", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * Task
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
    public function getStateAllowableValues(): array {
        return [
            self::STATE_IDLE,
            self::STATE_IN_PROGRESS,
            self::STATE_IN_REVIEW,
            self::STATE_DONE,
        ];
    }

    /**
     * Get id - Task ID
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id - Task ID
     * 
     * @param string|null $id Task ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
    }

    /**
     * Get assigneeId - Author ID
     *
     * @return string|null
     */
    public function getAssigneeId(): ?string {
        return $this->_data["assigneeId"];
    }

    /**
     * Set assigneeId - Author ID
     * 
     * @param string|null $assignee_id Author ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssigneeId($assignee_id) {
        return $this->_set("assigneeId", $assignee_id);
    }

    /**
     * Get digest - Task title
     *
     * @return string|null
     */
    public function getDigest(): ?string {
        return $this->_data["digest"];
    }

    /**
     * Set digest - Task title
     * 
     * @param string|null $digest Task title
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDigest($digest) {
        return $this->_set("digest", $digest);
    }

    /**
     * Get details - Task description
     *
     * @return string|null
     */
    public function getDetails(): ?string {
        return $this->_data["details"];
    }

    /**
     * Set details - Task description
     * 
     * @param string|null $details Task description
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDetails($details) {
        return $this->_set("details", $details);
    }

    /**
     * Get state - Task state    * `idle` - Idle   * `in progress` - In progress   * `in review` - In review   * `done` - Done
     *
     * @return string|null
     */
    public function getState(): ?string {
        return $this->_data["state"];
    }

    /**
     * Set state - Task state    * `idle` - Idle   * `in progress` - In progress   * `in review` - In review   * `done` - Done
     * 
     * @param string|null $state Task state    * `idle` - Idle   * `in progress` - In progress   * `in review` - In review   * `done` - Done
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setState($state) {
        return $this->_set("state", $state);
    }

    /**
     * Get notionIds - Notions
     *
     * @return string[]|null
     */
    public function getNotionIds(): ?array {
        return $this->_data["notionIds"];
    }

    /**
     * Set notionIds - Notions
     * 
     * @param string[]|null $notion_ids Notions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNotionIds(?array $notion_ids) {
        return $this->_set("notionIds", $notion_ids);
    }
}
