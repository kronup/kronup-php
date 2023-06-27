<?php

/**
 * Payload_Task_Feedback_Update Model
 *
 * @copyright (c) 2022-2023 kronup.io
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://php.kronup.io/
 *
 * NOTE: This class is auto-generated by Kronup
 * Do not edit this file manually!
 */

namespace Kronup\Model;
!defined("KRONUP-SDK") && exit();

/**
 * Payload_Task_Feedback_Update Model
 * 
 * Payload object required to update feedback given to a Task
 */
class PayloadTaskFeedbackUpdate extends AbstractModel {

    public const _D = null;
    public const ISSUE_VALUE = 'value';
    public const ISSUE_COMPLEXITY = 'complexity';
    public const ISSUE_FLEXIBILITY = 'flexibility';
    public const ISSUE_TESTING = 'testing';
    public const ISSUE_SECURITY = 'security';
    public const ISSUE_CI_CD = 'ci/cd';
    public const ISSUE_STANDARDS = 'standards';
    public const ISSUE_MISC = 'misc';
    protected static $_name = "Payload_Task_Feedback_Update";
    protected static $_definition = [
        "message" => ["message", "string", null, "getMessage", "setMessage", null, ["r" => 0, "nl" => 1, "xl" => 512]], 
        "issue" => ["issue", "string", null, "getIssue", "setIssue", null, ["r" => 0, "e" => 1]]
    ];

    /**
     * PayloadTaskFeedbackUpdate
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
    public function getIssueAllowableValues(): array {
        return [
            self::ISSUE_VALUE,
            self::ISSUE_COMPLEXITY,
            self::ISSUE_FLEXIBILITY,
            self::ISSUE_TESTING,
            self::ISSUE_SECURITY,
            self::ISSUE_CI_CD,
            self::ISSUE_STANDARDS,
            self::ISSUE_MISC,
        ];
    }

    /**
     * Get message - Feedback details
     *
     * @return string|null
     */
    public function getMessage(): ?string {
        return $this->_data["message"];
    }

    /**
     * Set message - Feedback details
     * 
     * @param string|null $message Feedback details
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMessage($message) {
        return $this->_set("message", $message);
    }

    /**
     * Get issue - Feedback issue
     *
     * @return string|null
     */
    public function getIssue(): ?string {
        return $this->_data["issue"];
    }

    /**
     * Set issue - Feedback issue
     * 
     * @param string|null $issue Feedback issue
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIssue($issue) {
        return $this->_set("issue", $issue);
    }
}
