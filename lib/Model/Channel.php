<?php

/**
 * Channel Model
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
 * Channel Model
 * 
 * Channel
 */
class Channel extends AbstractModel {

    public const _D = null;
    protected static $_name = "Channel";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "isDefault" => ["isDefault", "bool", null, "getIsDefault", "setIsDefault", false, ["r" => 0]], 
        "channelName" => ["channelName", "string", null, "getChannelName", "setChannelName", null, ["r" => 0, "nl" => 1, "xl" => 64]], 
        "channelDesc" => ["channelDesc", "string", null, "getChannelDesc", "setChannelDesc", null, ["r" => 0, "nl" => 0, "xl" => 256]]
    ];

    /**
     * Channel
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get id - Channel ID
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id - Channel ID
     * 
     * @param string|null $id Channel ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
    }

    /**
     * Get isDefault - 
     *
     * @return bool|null
     */
    public function getIsDefault(): ?bool {
        return $this->_data["isDefault"];
    }

    /**
     * Set isDefault - 
     * 
     * @param bool|null $is_default
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIsDefault($is_default) {
        return $this->_set("isDefault", $is_default);
    }

    /**
     * Get channelName - Channel name
     *
     * @return string|null
     */
    public function getChannelName(): ?string {
        return $this->_data["channelName"];
    }

    /**
     * Set channelName - Channel name
     * 
     * @param string|null $channel_name Channel name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChannelName($channel_name) {
        return $this->_set("channelName", $channel_name);
    }

    /**
     * Get channelDesc - Channel description
     *
     * @return string|null
     */
    public function getChannelDesc(): ?string {
        return $this->_data["channelDesc"];
    }

    /**
     * Set channelDesc - Channel description
     * 
     * @param string|null $channel_desc Channel description
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChannelDesc($channel_desc) {
        return $this->_set("channelDesc", $channel_desc);
    }
}
