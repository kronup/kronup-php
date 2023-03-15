<?php

/**
 * Payload_Task_Feedback_Reply Model
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
 * Payload_Task_Feedback_Reply Model
 * 
 * Payload object required to reply to feedback given to a Task
 */
class PayloadTaskFeedbackReply extends AbstractModel {

    public const _D = null;
    protected static $_name = "Payload_Task_Feedback_Reply";
    protected static $_definition = [
        "reply" => ["reply", "string", null, "getReply", "setReply", null, ["r" => 0, "nl" => 1, "xl" => 1024]]
    ];

    /**
     * PayloadTaskFeedbackReply
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get reply - Feedback reply
     *
     * @return string|null
     */
    public function getReply(): ?string {
        return $this->_data["reply"];
    }

    /**
     * Set reply - Feedback reply
     * 
     * @param string|null $reply Feedback reply
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReply($reply) {
        return $this->_set("reply", $reply);
    }
}
