<?php

/**
 * MinuteFeedback Model
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
 * MinuteFeedback Model
 * 
 * Task feedback recorded in an iteration
 */
class MinuteFeedback extends AbstractModel {

    public const _D = null;
    public const ISSUE_VALUE = 'value';
    public const ISSUE_COMPLEXITY = 'complexity';
    public const ISSUE_FLEXIBILITY = 'flexibility';
    public const ISSUE_TESTING = 'testing';
    public const ISSUE_SECURITY = 'security';
    public const ISSUE_CI_CD = 'ci/cd';
    public const ISSUE_STANDARDS = 'standards';
    public const ISSUE_MISC = 'misc';
    protected static $_name = "MinuteFeedback";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "iat" => ["iat", "float", null, "getIat", "setIat", null, ["r" => 0]], 
        "iteration" => ["iteration", "float", null, "getIteration", "setIteration", 1, ["r" => 0, "n" => [1]]], 
        "authorUserId" => ["authorUserId", "string", null, "getAuthorUserId", "setAuthorUserId", null, ["r" => 0]], 
        "issue" => ["issue", "string", null, "getIssue", "setIssue", 'value', ["r" => 0, "e" => 1]], 
        "message" => ["message", "string", null, "getMessage", "setMessage", null, ["r" => 0, "nl" => 0, "xl" => 512]], 
        "reply" => ["reply", "string", null, "getReply", "setReply", null, ["r" => 0, "nl" => 0, "xl" => 512]]
    ];

    /**
     * MinuteFeedback
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
     * Get id - Feedback ID
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id - Feedback ID
     * 
     * @param string|null $id Feedback ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
    }

    /**
     * Get iat - Issued at time
     *
     * @return float|null
     */
    public function getIat(): ?float {
        return $this->_data["iat"];
    }

    /**
     * Set iat - Issued at time
     * 
     * @param float|null $iat Issued at time
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIat($iat) {
        return $this->_set("iat", $iat);
    }

    /**
     * Get iteration - Iteration number
     *
     * @return float|null
     */
    public function getIteration(): ?float {
        return $this->_data["iteration"];
    }

    /**
     * Set iteration - Iteration number
     * 
     * @param float|null $iteration Iteration number
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIteration($iteration) {
        return $this->_set("iteration", $iteration);
    }

    /**
     * Get authorUserId - User ID
     *
     * @return string|null
     */
    public function getAuthorUserId(): ?string {
        return $this->_data["authorUserId"];
    }

    /**
     * Set authorUserId - User ID
     * 
     * @param string|null $author_user_id User ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthorUserId($author_user_id) {
        return $this->_set("authorUserId", $author_user_id);
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

    /**
     * Get message - Feedback for assignee
     *
     * @return string|null
     */
    public function getMessage(): ?string {
        return $this->_data["message"];
    }

    /**
     * Set message - Feedback for assignee
     * 
     * @param string|null $message Feedback for assignee
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMessage($message) {
        return $this->_set("message", $message);
    }

    /**
     * Get reply - Reply from assignee
     *
     * @return string|null
     */
    public function getReply(): ?string {
        return $this->_data["reply"];
    }

    /**
     * Set reply - Reply from assignee
     * 
     * @param string|null $reply Reply from assignee
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReply($reply) {
        return $this->_set("reply", $reply);
    }
}
