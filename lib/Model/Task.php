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
        "assigneeUserId" => ["assigneeUserId", "string", null, "getAssigneeUserId", "setAssigneeUserId", null, ["r" => 0]], 
        "heading" => ["heading", "string", null, "getHeading", "setHeading", null, ["r" => 0, "nl" => 1, "xl" => 256]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 2048]], 
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
     * Get notionIds - Notion IDs
     *
     * @return string[]|null
     */
    public function getNotionIds(): ?array {
        return $this->_data["notionIds"];
    }

    /**
     * Set notionIds - Notion IDs
     * 
     * @param string[]|null $notion_ids Notion IDs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNotionIds(?array $notion_ids) {
        return $this->_set("notionIds", $notion_ids);
    }
}
