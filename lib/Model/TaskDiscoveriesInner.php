<?php

/**
 * Task_discoveries_inner Model
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
 * Task_discoveries_inner Model
 * 
 * Discovery
 */
class TaskDiscoveriesInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "Task_discoveries_inner";
    protected static $_definition = [
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0]], 
        "iteration" => ["iteration", "float", null, "getIteration", "setIteration", null, ["r" => 0]]
    ];

    /**
     * TaskDiscoveriesInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get details
     *
     * @return string|null
     */
    public function getDetails(): ?string {
        return $this->_data["details"];
    }

    /**
     * Set details
     * 
     * @param string|null $details Discovery details
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDetails($details) {
        return $this->_set("details", $details);
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
}