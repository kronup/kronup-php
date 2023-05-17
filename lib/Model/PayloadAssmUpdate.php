<?php

/**
 * Payload_Assm_Update Model
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
 * Payload_Assm_Update Model
 * 
 * Payload object required to update a Value Item assumption
 */
class PayloadAssmUpdate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Payload_Assm_Update";
    protected static $_definition = [
        "heading" => ["heading", "string", null, "getHeading", "setHeading", null, ["r" => 0, "nl" => 1, "xl" => 256]]
    ];

    /**
     * PayloadAssmUpdate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get heading - Assumption heading
     *
     * @return string|null
     */
    public function getHeading(): ?string {
        return $this->_data["heading"];
    }

    /**
     * Set heading - Assumption heading
     * 
     * @param string|null $heading Assumption heading
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeading($heading) {
        return $this->_set("heading", $heading);
    }
}
