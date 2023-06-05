<?php

/**
 * Payload_Assm_Experiment Model
 *
 * @copyright (c) 2022-2023 kronup.io
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://kronup.io/
 *
 * NOTE: This class is auto-generated by kronup.io
 * Do not edit this file manually!
 */

namespace Kronup\Model;
!defined("KRONUP-SDK") && exit();

/**
 * Payload_Assm_Experiment Model
 * 
 * Payload object for assumption experiment
 */
class PayloadAssmExperiment extends AbstractModel {

    public const _D = null;
    public const STATE_IDLE = 'idle';
    public const STATE_RUNNING = 'running';
    public const STATE_DONE = 'done';
    protected static $_name = "Payload_Assm_Experiment";
    protected static $_definition = [
        "confirmed" => ["confirmed", "bool", null, "getConfirmed", "setConfirmed", null, ["r" => 0]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 2048]], 
        "state" => ["state", "string", null, "getState", "setState", null, ["r" => 0, "e" => 1]]
    ];

    /**
     * PayloadAssmExperiment
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
     * Get details - Experiment detailed findings
     *
     * @return string|null
     */
    public function getDetails(): ?string {
        return $this->_data["details"];
    }

    /**
     * Set details - Experiment detailed findings
     * 
     * @param string|null $details Experiment detailed findings
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
