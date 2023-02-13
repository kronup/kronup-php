<?php

/**
 * accountUpdate_400_response Model
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
 * accountUpdate_400_response Model
 */
class AccountUpdate400Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "accountUpdate_400_response";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "message" => ["message", "string", null, "getMessage", "setMessage", null, ["r" => 0]]
    ];

    /**
     * AccountUpdate400Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id id
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId( $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage(): ?string {
        return $this->_data["message"];
    }

    /**
     * Set message
     * 
     * @param string|null $message message
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMessage( $message) {
        return $this->_set("message", $message);
    }
}
