<?php

/**
 * valueItemCreate_request Model
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
 * valueItemCreate_request Model
 */
class ValueItemCreateRequest extends AbstractModel {

    public const _D = null;
    public const TYPE_F = 'f';
    public const TYPE_B = 'b';
    public const TYPE_C = 'c';
    public const PRIORITY_M = 'm';
    public const PRIORITY_S = 's';
    public const PRIORITY_C = 'c';
    public const PRIORITY_W = 'w';
    protected static $_name = "valueItemCreate_request";
    protected static $_definition = [
        "digest" => ["digest", "string", null, "getDigest", "setDigest", null, ["r" => 0, "nl" => 3, "xl" => 256]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 3, "xl" => 4096]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 0, "e" => 1]], 
        "priority" => ["priority", "string", null, "getPriority", "setPriority", null, ["r" => 0, "e" => 1]]
    ];

    /**
     * ValueItemCreateRequest
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
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_F,
            self::TYPE_B,
            self::TYPE_C,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getPriorityAllowableValues(): array {
        return [
            self::PRIORITY_M,
            self::PRIORITY_S,
            self::PRIORITY_C,
            self::PRIORITY_W,
        ];
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
     * @param string|null $digest Value item digest
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
     * @param string|null $details Value item description
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDetails($details) {
        return $this->_set("details", $details);
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type Value item type  <ul> <li><code>f</code> - Feature</li> <li><code>b</code> - Bug fix</li> <li><code>c</code> - Chore</li> </ul>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType($type) {
        return $this->_set("type", $type);
    }

    /**
     * Get priority
     *
     * @return string|null
     */
    public function getPriority(): ?string {
        return $this->_data["priority"];
    }

    /**
     * Set priority
     * 
     * @param string|null $priority Value item MoSCoW priority <ul> <li><code>m</code> - Must-have</li> <li><code>s</code> - Should-have</li> <li><code>c</code> - Could-have</li> <li><code>w</code> - Will NOT have</li> </ul>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPriority($priority) {
        return $this->_set("priority", $priority);
    }
}
