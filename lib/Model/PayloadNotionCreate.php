<?php

/**
 * Payload_Notion_Create Model
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
 * Payload_Notion_Create Model
 * 
 * Payload object required to create a Notion
 */
class PayloadNotionCreate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Payload_Notion_Create";
    protected static $_definition = [
        "value" => ["value", "string", null, "getValue", "setValue", null, ["r" => 0, "nl" => 1, "xl" => 64]]
    ];

    /**
     * PayloadNotionCreate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get value - Notion
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value - Notion
     * 
     * @param string|null $value Notion
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue($value) {
        return $this->_set("value", $value);
    }
}
