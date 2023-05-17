<?php

/**
 * Experiment Model
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
 * Experiment Model
 * 
 * Experiment meant to validate assumption
 */
class Experiment extends AbstractModel {

    public const _D = null;
    public const STATE_IDLE = 'idle';
    public const STATE_RUNNING = 'running';
    public const STATE_DONE = 'done';
    protected static $_name = "Experiment";
    protected static $_definition = [
        "authorUserIds" => ["authorUserIds", "string[]", null, "getAuthorUserIds", "setAuthorUserIds", null, ["r" => 0, "c" => 1]], 
        "confirmed" => ["confirmed", "bool", null, "getConfirmed", "setConfirmed", false, ["r" => 0]], 
        "heading" => ["heading", "string", null, "getHeading", "setHeading", null, ["r" => 0, "nl" => 1, "xl" => 256]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 4096]], 
        "state" => ["state", "string", null, "getState", "setState", 'idle', ["r" => 0, "e" => 1]]
    ];

    /**
     * Experiment
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
            self::STATE_RUNNING,
            self::STATE_DONE,
        ];
    }

    /**
     * Get authorUserIds - Author IDs
     *
     * @return string[]|null
     */
    public function getAuthorUserIds(): ?array {
        return $this->_data["authorUserIds"];
    }

    /**
     * Set authorUserIds - Author IDs
     * 
     * @param string[]|null $author_user_ids Author IDs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthorUserIds(?array $author_user_ids) {
        return $this->_set("authorUserIds", $author_user_ids);
    }

    /**
     * Get confirmed - Experiment confirms assumption
     *
     * @return bool|null
     */
    public function getConfirmed(): ?bool {
        return $this->_data["confirmed"];
    }

    /**
     * Set confirmed - Experiment confirms assumption
     * 
     * @param bool|null $confirmed Experiment confirms assumption
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setConfirmed($confirmed) {
        return $this->_set("confirmed", $confirmed);
    }

    /**
     * Get heading - Experiment findings formulated in one sentence
     *
     * @return string|null
     */
    public function getHeading(): ?string {
        return $this->_data["heading"];
    }

    /**
     * Set heading - Experiment findings formulated in one sentence
     * 
     * @param string|null $heading Experiment findings formulated in one sentence
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeading($heading) {
        return $this->_set("heading", $heading);
    }

    /**
     * Get details - Experiment details
     *
     * @return string|null
     */
    public function getDetails(): ?string {
        return $this->_data["details"];
    }

    /**
     * Set details - Experiment details
     * 
     * @param string|null $details Experiment details
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDetails($details) {
        return $this->_set("details", $details);
    }

    /**
     * Get state - Experiment state
     *
     * @return string|null
     */
    public function getState(): ?string {
        return $this->_data["state"];
    }

    /**
     * Set state - Experiment state
     * 
     * @param string|null $state Experiment state
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setState($state) {
        return $this->_set("state", $state);
    }
}
