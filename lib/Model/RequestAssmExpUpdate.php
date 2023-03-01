<?php

/**
 * RequestAssmExpUpdate Model
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
 * RequestAssmExpUpdate Model
 */
class RequestAssmExpUpdate extends AbstractModel {

    public const _D = null;
    public const STATE_I = 'i';
    public const STATE_R = 'r';
    public const STATE_D = 'd';
    protected static $_name = "RequestAssmExpUpdate";
    protected static $_definition = [
        "confirmed" => ["confirmed", "bool", null, "getConfirmed", "setConfirmed", null, ["r" => 0]], 
        "digest" => ["digest", "string", null, "getDigest", "setDigest", null, ["r" => 0, "nl" => 1, "xl" => 256]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 4096]], 
        "state" => ["state", "string", null, "getState", "setState", null, ["r" => 0, "e" => 1]]
    ];

    /**
     * RequestAssmExpUpdate
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
            self::STATE_R,
            self::STATE_D,
        ];
    }

    /**
     * Get confirmed
     *
     * @return bool|null
     */
    public function getConfirmed(): ?bool {
        return $this->_data["confirmed"];
    }

    /**
     * Set confirmed
     * 
     * @param bool|null $confirmed Experiment confirms assumption
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setConfirmed($confirmed) {
        return $this->_set("confirmed", $confirmed);
    }

    /**
     * Get digest
     *
     * @return string|null
     */
    public function getDigest(): ?string {
        return $this->_data["digest"];
    }

    /**
     * Set digest
     * 
     * @param string|null $digest Experiment digest
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDigest($digest) {
        return $this->_set("digest", $digest);
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
     * @param string|null $details Experiment findings
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDetails($details) {
        return $this->_set("details", $details);
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
     * @param string|null $state Experiment state <ul> <li><code>i</code> - Idle</li> <li><code>r</code> - Running</li> <li><code>d</code> - Done</li> </ul>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setState($state) {
        return $this->_set("state", $state);
    }
}
