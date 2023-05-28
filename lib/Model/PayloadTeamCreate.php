<?php

/**
 * Payload_Team_Create Model
 *
 * @copyright (c) 2022-2023 kronup.io
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://kronup.io/
 *
 * NOTE: This class is auto-generated by kronup.io
 * Do not edit this file manually!
 */

namespace Kronup\Model;
!defined("KRONUP-SDK") && exit();

/**
 * Payload_Team_Create Model
 * 
 * Payload object required to create a Team
 */
class PayloadTeamCreate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Payload_Team_Create";
    protected static $_definition = [
        "teamName" => ["teamName", "string", null, "getTeamName", "setTeamName", null, ["r" => 1, "nl" => 3, "xl" => 64]]
    ];

    /**
     * PayloadTeamCreate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get teamName - Team name
     *
     * @return string
     */
    public function getTeamName(): string {
        return $this->_data["teamName"];
    }

    /**
     * Set teamName - Team name
     * 
     * @param string $team_name Team name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTeamName($team_name) {
        return $this->_set("teamName", $team_name);
    }
}
