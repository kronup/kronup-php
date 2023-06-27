<?php

/**
 * Candidate Model
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
 * Candidate Model
 * 
 * Task Candidate
 */
class Candidate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Candidate";
    protected static $_definition = [
        "userId" => ["userId", "string", null, "getUserId", "setUserId", null, ["r" => 0]], 
        "userName" => ["userName", "string", null, "getUserName", "setUserName", null, ["r" => 0, "nl" => 3, "xl" => 64]], 
        "userItems" => ["userItems", "int", null, "getUserItems", "setUserItems", null, ["r" => 0, "n" => [0]]], 
        "ydStress" => ["ydStress", "float", null, "getYdStress", "setYdStress", null, ["r" => 0, "n" => [0], "x" => [100]]], 
        "ydPrecision" => ["ydPrecision", "float", null, "getYdPrecision", "setYdPrecision", null, ["r" => 0, "n" => [0], "x" => [100]]], 
        "ydScore" => ["ydScore", "float", null, "getYdScore", "setYdScore", null, ["r" => 0, "n" => [0], "x" => [100]]]
    ];

    /**
     * Candidate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get userId - User ID
     *
     * @return string|null
     */
    public function getUserId(): ?string {
        return $this->_data["userId"];
    }

    /**
     * Set userId - User ID
     * 
     * @param string|null $user_id User ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserId($user_id) {
        return $this->_set("userId", $user_id);
    }

    /**
     * Get userName - User name
     *
     * @return string|null
     */
    public function getUserName(): ?string {
        return $this->_data["userName"];
    }

    /**
     * Set userName - User name
     * 
     * @param string|null $user_name User name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserName($user_name) {
        return $this->_set("userName", $user_name);
    }

    /**
     * Get userItems - Number of value items where this user is executing tasks
     *
     * @return int|null
     */
    public function getUserItems(): ?int {
        return $this->_data["userItems"];
    }

    /**
     * Set userItems - Number of value items where this user is executing tasks
     * 
     * @param int|null $user_items Number of value items where this user is executing tasks
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserItems($user_items) {
        return $this->_set("userItems", $user_items);
    }

    /**
     * Get ydStress - Forecast stress level based on notion assessments (0 to 100)
     *
     * @return float|null
     */
    public function getYdStress(): ?float {
        return $this->_data["ydStress"];
    }

    /**
     * Set ydStress - Forecast stress level based on notion assessments (0 to 100)
     * 
     * @param float|null $yd_stress Forecast stress level based on notion assessments (0 to 100)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setYdStress($yd_stress) {
        return $this->_set("ydStress", $yd_stress);
    }

    /**
     * Get ydPrecision - Percentage of notions assessed for this task (0 to 100)
     *
     * @return float|null
     */
    public function getYdPrecision(): ?float {
        return $this->_data["ydPrecision"];
    }

    /**
     * Set ydPrecision - Percentage of notions assessed for this task (0 to 100)
     * 
     * @param float|null $yd_precision Percentage of notions assessed for this task (0 to 100)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setYdPrecision($yd_precision) {
        return $this->_set("ydPrecision", $yd_precision);
    }

    /**
     * Get ydScore - Yerkes-Dodson score; 40+ is good, 90+ is great
     *
     * @return float|null
     */
    public function getYdScore(): ?float {
        return $this->_data["ydScore"];
    }

    /**
     * Set ydScore - Yerkes-Dodson score; 40+ is good, 90+ is great
     * 
     * @param float|null $yd_score Yerkes-Dodson score; 40+ is good, 90+ is great
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setYdScore($yd_score) {
        return $this->_set("ydScore", $yd_score);
    }
}
