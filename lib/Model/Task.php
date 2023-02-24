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
 * Value Item Task
 */
class Task extends AbstractModel {

    public const _D = null;
    public const STATE_I = 'i';
    public const STATE_P = 'p';
    public const STATE_R = 'r';
    public const STATE_D = 'd';
    protected static $_name = "Task";
    protected static $_definition = [
        "assigneeId" => ["assigneeId", "string", null, "getAssigneeId", "setAssigneeId", null, ["r" => 0]], 
        "title" => ["title", "string", null, "getTitle", "setTitle", null, ["r" => 0]], 
        "description" => ["description", "string", null, "getDescription", "setDescription", null, ["r" => 0]], 
        "state" => ["state", "string", null, "getState", "setState", null, ["r" => 0, "e" => 1]], 
        "keywords" => ["keywords", "string[]", null, "getKeywords", "setKeywords", null, ["r" => 0, "c" => 1]], 
        "iteration" => ["iteration", "float", null, "getIteration", "setIteration", null, ["r" => 0]], 
        "discoveries" => ["discoveries", "\Kronup\Model\TaskDiscoveriesInner[]", null, "getDiscoveries", "setDiscoveries", null, ["r" => 0, "c" => 1]], 
        "feedback" => ["feedback", "\Kronup\Model\TaskFeedbackInner[]", null, "getFeedback", "setFeedback", null, ["r" => 0, "c" => 1]], 
        "ama" => ["ama", "\Kronup\Model\TaskAmaInner[]", null, "getAma", "setAma", null, ["r" => 0, "c" => 1]]
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
            self::STATE_I,
            self::STATE_P,
            self::STATE_R,
            self::STATE_D,
        ];
    }

    /**
     * Get assigneeId
     *
     * @return string|null
     */
    public function getAssigneeId(): ?string {
        return $this->_data["assigneeId"];
    }

    /**
     * Set assigneeId
     * 
     * @param string|null $assignee_id Author ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssigneeId($assignee_id) {
        return $this->_set("assigneeId", $assignee_id);
    }

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle(): ?string {
        return $this->_data["title"];
    }

    /**
     * Set title
     * 
     * @param string|null $title Task title
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTitle($title) {
        return $this->_set("title", $title);
    }

    /**
     * Get description
     *
     * @return string|null
     */
    public function getDescription(): ?string {
        return $this->_data["description"];
    }

    /**
     * Set description
     * 
     * @param string|null $description Task description
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDescription($description) {
        return $this->_set("description", $description);
    }

    /**
     * Get state
     *
     * @return string|null
     */
    public function getState(): ?string {
        return $this->_data["state"];
    }

    /**
     * Set state
     * 
     * @param string|null $state Task state   * `i` - Idle   * `p` - In progress   * `r` - In review   * `d` - Done
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setState($state) {
        return $this->_set("state", $state);
    }

    /**
     * Get keywords
     *
     * @return string[]|null
     */
    public function getKeywords(): ?array {
        return $this->_data["keywords"];
    }

    /**
     * Set keywords
     * 
     * @param string[]|null $keywords Keywords
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setKeywords(?array $keywords) {
        return $this->_set("keywords", $keywords);
    }

    /**
     * Get iteration
     *
     * @return float|null
     */
    public function getIteration(): ?float {
        return $this->_data["iteration"];
    }

    /**
     * Set iteration
     * 
     * @param float|null $iteration Iteration number
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIteration($iteration) {
        return $this->_set("iteration", $iteration);
    }

    /**
     * Get discoveries
     *
     * @return \Kronup\Model\TaskDiscoveriesInner[]|null
     */
    public function getDiscoveries(): ?array {
        return $this->_data["discoveries"];
    }

    /**
     * Set discoveries
     * 
     * @param \Kronup\Model\TaskDiscoveriesInner[]|null $discoveries Discoveries
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDiscoveries(?array $discoveries) {
        return $this->_set("discoveries", $discoveries);
    }

    /**
     * Get feedback
     *
     * @return \Kronup\Model\TaskFeedbackInner[]|null
     */
    public function getFeedback(): ?array {
        return $this->_data["feedback"];
    }

    /**
     * Set feedback
     * 
     * @param \Kronup\Model\TaskFeedbackInner[]|null $feedback Feedback
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeedback(?array $feedback) {
        return $this->_set("feedback", $feedback);
    }

    /**
     * Get ama
     *
     * @return \Kronup\Model\TaskAmaInner[]|null
     */
    public function getAma(): ?array {
        return $this->_data["ama"];
    }

    /**
     * Set ama
     * 
     * @param \Kronup\Model\TaskAmaInner[]|null $ama Ask me anything
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAma(?array $ama) {
        return $this->_set("ama", $ama);
    }
}