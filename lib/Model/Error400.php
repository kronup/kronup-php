<?php

/**
 * Error400 Model
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
 * Error400 Model
 * 
 * Invalid argument error
 */
class Error400 extends AbstractModel {

    public const _D = null;
    protected static $_name = "Error400";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 1]], 
        "message" => ["message", "string", null, "getMessage", "setMessage", null, ["r" => 1]]
    ];

    /**
     * Error400
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get id - Unique lowercase string that identifies this 400 error
     *
     * @return string
     */
    public function getId(): string {
        return $this->_data["id"];
    }

    /**
     * Set id - Unique lowercase string that identifies this 400 error
     * 
     * @param string $id Unique lowercase string that identifies this 400 error
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
    }

    /**
     * Get message - 400 Error message (supports i18n)
     *
     * @return string
     */
    public function getMessage(): string {
        return $this->_data["message"];
    }

    /**
     * Set message - 400 Error message (supports i18n)
     * 
     * @param string $message 400 Error message (supports i18n)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMessage($message) {
        return $this->_set("message", $message);
    }
}
