<?php

/**
 * Evaluations__peers Model
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
 * Evaluations__peers Model
 */
class EvaluationsPeers extends AbstractModel {

    public const _D = null;
    protected static $_name = "Evaluations__peers";
    protected static $_definition = [
        "count" => ["count", "int", null, "getCount", "setCount", null, ["r" => 0, "n" => [0]]], 
        "average" => ["average", "float", 'float', "getAverage", "setAverage", null, ["r" => 0]], 
        "recent" => ["recent", "int[]", null, "getRecent", "setRecent", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * EvaluationsPeers
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get count - Total number of evaluations
     *
     * @return int|null
     */
    public function getCount(): ?int {
        return $this->_data["count"];
    }

    /**
     * Set count - Total number of evaluations
     * 
     * @param int|null $count Total number of evaluations
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCount($count) {
        return $this->_set("count", $count);
    }

    /**
     * Get average - Average value
     *
     * @return float|null
     */
    public function getAverage(): ?float {
        return $this->_data["average"];
    }

    /**
     * Set average - Average value
     * 
     * @param float|null $average Average value
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAverage($average) {
        return $this->_set("average", $average);
    }

    /**
     * Get recent - Recent grades
     *
     * @return int[]|null
     */
    public function getRecent(): ?array {
        return $this->_data["recent"];
    }

    /**
     * Set recent - Recent grades
     * 
     * @param int[]|null $recent Recent grades
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecent(?array $recent) {
        return $this->_set("recent", $recent);
    }
}
