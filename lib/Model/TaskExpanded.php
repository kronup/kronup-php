<?php

/**
 * TaskExpanded Model
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
 * TaskExpanded Model
 * 
 * Task model without Minutes
 */
class TaskExpanded extends AbstractModel {

    public const _D = null;
    public const STATE_IDLE = 'idle';
    public const STATE_IN_PROGRESS = 'in progress';
    public const STATE_IN_REVIEW = 'in review';
    public const STATE_DONE = 'done';
    protected static $_name = "TaskExpanded";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "assigneeUserId" => ["assigneeUserId", "string", null, "getAssigneeUserId", "setAssigneeUserId", null, ["r" => 0]], 
        "heading" => ["heading", "string", null, "getHeading", "setHeading", null, ["r" => 0, "nl" => 1, "xl" => 110]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 2048]], 
        "state" => ["state", "string", null, "getState", "setState", 'idle', ["r" => 0, "e" => 1]], 
        "minute" => ["minute", "\Kronup\Model\Minute", null, "getMinute", "setMinute", null, ["r" => 0]], 
        "notions" => ["notions", "\Kronup\Model\Notion[]", null, "getNotions", "setNotions", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * TaskExpanded
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
     * Get assigneeUserId - User ID
     *
     * @return string|null
     */
    public function getAssigneeUserId(): ?string {
        return $this->_data["assigneeUserId"];
    }

    /**
     * Set assigneeUserId - User ID
     * 
     * @param string|null $assignee_user_id User ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssigneeUserId($assignee_user_id) {
        return $this->_set("assigneeUserId", $assignee_user_id);
    }

    /**
     * Get heading - Task title
     *
     * @return string|null
     */
    public function getHeading(): ?string {
        return $this->_data["heading"];
    }

    /**
     * Set heading - Task title
     * 
     * @param string|null $heading Task title
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeading($heading) {
        return $this->_set("heading", $heading);
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
     * Get state - Task state
     *
     * @return string|null
     */
    public function getState(): ?string {
        return $this->_data["state"];
    }

    /**
     * Set state - Task state
     * 
     * @param string|null $state Task state
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setState($state) {
        return $this->_set("state", $state);
    }

    /**
     * Get minute - 
     *
     * @return \Kronup\Model\Minute|null
     */
    public function getMinute(): ?\Kronup\Model\Minute {
        return $this->_data["minute"];
    }

    /**
     * Set minute - 
     * 
     * @param \Kronup\Model\Minute|null $minute
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMinute($minute) {
        return $this->_set("minute", $minute);
    }

    /**
     * Get notions - Notions
     *
     * @return \Kronup\Model\Notion[]|null
     */
    public function getNotions(): ?array {
        return $this->_data["notions"];
    }

    /**
     * Set notions - Notions
     * 
     * @param \Kronup\Model\Notion[]|null $notions Notions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNotions(?array $notions) {
        return $this->_set("notions", $notions);
    }
}
