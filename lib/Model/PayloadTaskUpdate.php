<?php

/**
 * Payload_Task_Update Model
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
 * Payload_Task_Update Model
 * 
 * Payload object required to update a Task
 */
class PayloadTaskUpdate extends AbstractModel {

    public const _D = null;
    public const STATE_IDLE = 'idle';
    public const STATE_IN_PROGRESS = 'in progress';
    public const STATE_IN_REVIEW = 'in review';
    public const STATE_DONE = 'done';
    protected static $_name = "Payload_Task_Update";
    protected static $_definition = [
        "heading" => ["heading", "string", null, "getHeading", "setHeading", null, ["r" => 0, "nl" => 1, "xl" => 200]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 2048]], 
        "state" => ["state", "string", null, "getState", "setState", null, ["r" => 0, "e" => 1]], 
        "notionIds" => ["notionIds", "string[]", null, "getNotionIds", "setNotionIds", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * PayloadTaskUpdate
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
     * Get heading - Task heading
     *
     * @return string|null
     */
    public function getHeading(): ?string {
        return $this->_data["heading"];
    }

    /**
     * Set heading - Task heading
     * 
     * @param string|null $heading Task heading
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeading($heading) {
        return $this->_set("heading", $heading);
    }

    /**
     * Get details - Task details
     *
     * @return string|null
     */
    public function getDetails(): ?string {
        return $this->_data["details"];
    }

    /**
     * Set details - Task details
     * 
     * @param string|null $details Task details
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
