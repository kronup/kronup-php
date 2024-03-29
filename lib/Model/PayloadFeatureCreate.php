<?php

/**
 * Payload_Feature_Create Model
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
 * Payload_Feature_Create Model
 * 
 * Payload object required to create a Feature
 */
class PayloadFeatureCreate extends AbstractModel {

    public const _D = null;
    public const FOCUS_FIRMITAS = 'firmitas';
    public const FOCUS_UTILITAS = 'utilitas';
    public const FOCUS_VENUSTAS = 'venustas';
    protected static $_name = "Payload_Feature_Create";
    protected static $_definition = [
        "heading" => ["heading", "string", null, "getHeading", "setHeading", null, ["r" => 0, "nl" => 1, "xl" => 200]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 2048]], 
        "focus" => ["focus", "string", null, "getFocus", "setFocus", null, ["r" => 0, "e" => 1]], 
        "priority" => ["priority", "float", null, "getPriority", "setPriority", null, ["r" => 0, "n" => [1], "x" => [10]]]
    ];

    /**
     * PayloadFeatureCreate
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
    public function getFocusAllowableValues(): array {
        return [
            self::FOCUS_FIRMITAS,
            self::FOCUS_UTILITAS,
            self::FOCUS_VENUSTAS,
        ];
    }

    /**
     * Get heading - Feature heading
     *
     * @return string|null
     */
    public function getHeading(): ?string {
        return $this->_data["heading"];
    }

    /**
     * Set heading - Feature heading
     * 
     * @param string|null $heading Feature heading
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeading($heading) {
        return $this->_set("heading", $heading);
    }

    /**
     * Get details - Feature description
     *
     * @return string|null
     */
    public function getDetails(): ?string {
        return $this->_data["details"];
    }

    /**
     * Set details - Feature description
     * 
     * @param string|null $details Feature description
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDetails($details) {
        return $this->_set("details", $details);
    }

    /**
     * Get focus - Feature Focus
     *
     * @return string|null
     */
    public function getFocus(): ?string {
        return $this->_data["focus"];
    }

    /**
     * Set focus - Feature Focus
     * 
     * @param string|null $focus Feature Focus
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFocus($focus) {
        return $this->_set("focus", $focus);
    }

    /**
     * Get priority - Feature priority
     *
     * @return float|null
     */
    public function getPriority(): ?float {
        return $this->_data["priority"];
    }

    /**
     * Set priority - Feature priority
     * 
     * @param float|null $priority Feature priority
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPriority($priority) {
        return $this->_set("priority", $priority);
    }
}
