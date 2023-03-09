<?php

/**
 * Minute Model
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
 * Minute Model
 */
class Minute extends AbstractModel {

    public const _D = null;
    protected static $_name = "Minute";
    protected static $_definition = [
        "iteration" => ["iteration", "float", null, "getIteration", "setIteration", 1, ["r" => 0]], 
        "discoveries" => ["discoveries", "\Kronup\Model\MinuteDiscovery[]", null, "getDiscoveries", "setDiscoveries", null, ["r" => 0, "c" => 1]], 
        "feedback" => ["feedback", "\Kronup\Model\MinuteFeedback[]", null, "getFeedback", "setFeedback", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * Minute
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * Get discoveries - Discoveries
     *
     * @return \Kronup\Model\MinuteDiscovery[]|null
     */
    public function getDiscoveries(): ?array {
        return $this->_data["discoveries"];
    }

    /**
     * Set discoveries - Discoveries
     * 
     * @param \Kronup\Model\MinuteDiscovery[]|null $discoveries Discoveries
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDiscoveries(?array $discoveries) {
        return $this->_set("discoveries", $discoveries);
    }

    /**
     * Get feedback - Feedback
     *
     * @return \Kronup\Model\MinuteFeedback[]|null
     */
    public function getFeedback(): ?array {
        return $this->_data["feedback"];
    }

    /**
     * Set feedback - Feedback
     * 
     * @param \Kronup\Model\MinuteFeedback[]|null $feedback Feedback
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeedback(?array $feedback) {
        return $this->_set("feedback", $feedback);
    }
}
