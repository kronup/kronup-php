<?php

/**
 * Payload_Task_Discovery_Create Model
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
 * Payload_Task_Discovery_Create Model
 * 
 * Payload object required to create a Task discovery
 */
class PayloadTaskDiscoveryCreate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Payload_Task_Discovery_Create";
    protected static $_definition = [
        "details" => ["details", "string", null, "getDetails", "setDetails", null, ["r" => 0, "nl" => 1, "xl" => 1024]]
    ];

    /**
     * PayloadTaskDiscoveryCreate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get details - Discovery details
     *
     * @return string|null
     */
    public function getDetails(): ?string {
        return $this->_data["details"];
    }

    /**
     * Set details - Discovery details
     * 
     * @param string|null $details Discovery details
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDetails($details) {
        return $this->_set("details", $details);
    }
}
