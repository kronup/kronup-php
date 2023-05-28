<?php

/**
 * Payload_Task_Create Model
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
 * Payload_Task_Create Model
 * 
 * Payload object required to create a Task
 */
class PayloadTaskCreate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Payload_Task_Create";
    protected static $_definition = [
        "heading" => ["heading", "string", null, "getHeading", "setHeading", null, ["r" => 0, "nl" => 1, "xl" => 110]], 
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 2048]]
    ];

    /**
     * PayloadTaskCreate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get heading - Task heading
     *
     * @return string|null
     */
    public function getHeading(): ?string {
        return $this->_data["heading"];
    }

    /**
     * Set heading - Task heading
     * 
     * @param string|null $heading Task heading
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeading($heading) {
        return $this->_set("heading", $heading);
    }

    /**
     * Get details - Task details
     *
     * @return string|null
     */
    public function getDetails(): ?string {
        return $this->_data["details"];
    }

    /**
     * Set details - Task details
     * 
     * @param string|null $details Task details
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDetails($details) {
        return $this->_set("details", $details);
    }
}
