<?php

/**
 * Request_Value_Item_Create Model
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
 * Request_Value_Item_Create Model
 */
class RequestValueItemCreate extends AbstractModel {

    public const _D = null;
    public const TYPE_F = 'f';
    public const TYPE_B = 'b';
    public const TYPE_C = 'c';
    public const PRIORITY_M = 'm';
    public const PRIORITY_S = 's';
    public const PRIORITY_C = 'c';
    public const PRIORITY_W = 'w';
    protected static $_name = "Request_Value_Item_Create";
    protected static $_definition = [
        "digest" => ["digest", "string", null, "getDigest", "setDigest", null, ["r" => 0, "nl" => 1, "xl" => 256]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 4096]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 0, "e" => 1]], 
        "priority" => ["priority", "string", null, "getPriority", "setPriority", null, ["r" => 0, "e" => 1]]
    ];

    /**
     * RequestValueItemCreate
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
     * Get digest - Value item digest
     *
     * @return string|null
     */
    public function getDigest(): ?string {
        return $this->_data["digest"];
    }

    /**
     * Set digest - Value item digest
     * 
     * @param string|null $digest Value item digest
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDigest($digest) {
        return $this->_set("digest", $digest);
    }

    /**
     * Get details - Value item description
     *
     * @return string|null
     */
    public function getDetails(): ?string {
        return $this->_data["details"];
    }

    /**
     * Set details - Value item description
     * 
     * @param string|null $details Value item description
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDetails($details) {
        return $this->_set("details", $details);
    }

    /**
     * Get type - Value item type   * f - Feature  * b - Bug fix  * c - Chore
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type - Value item type   * f - Feature  * b - Bug fix  * c - Chore
     * 
     * @param string|null $type Value item type   * f - Feature  * b - Bug fix  * c - Chore
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType($type) {
        return $this->_set("type", $type);
    }

    /**
     * Get priority - Value item MoSCoW priority  * m - Must-have  * s - Should-have  * c - Could-have  * w - Will NOT have
     *
     * @return string|null
     */
    public function getPriority(): ?string {
        return $this->_data["priority"];
    }

    /**
     * Set priority - Value item MoSCoW priority  * m - Must-have  * s - Should-have  * c - Could-have  * w - Will NOT have
     * 
     * @param string|null $priority Value item MoSCoW priority  * m - Must-have  * s - Should-have  * c - Could-have  * w - Will NOT have
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPriority($priority) {
        return $this->_set("priority", $priority);
    }
}
