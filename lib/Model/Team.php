<?php

/**
 * Team Model
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
 * Team Model
 */
class Team extends AbstractModel {

    public const _D = null;
    protected static $_name = "Team";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "orgId" => ["orgId", "string", null, "getOrgId", "setOrgId", null, ["r" => 0]], 
        "teamName" => ["teamName", "string", null, "getTeamName", "setTeamName", null, ["r" => 0, "nl" => 1, "xl" => 64]], 
        "createdAt" => ["createdAt", "string", null, "getCreatedAt", "setCreatedAt", null, ["r" => 0]], 
        "updatedAt" => ["updatedAt", "string", null, "getUpdatedAt", "setUpdatedAt", null, ["r" => 0]]
    ];

    /**
     * Team
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get id - Team ID
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id - Team ID
     * 
     * @param string|null $id Team ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
    }

    /**
     * Get orgId - Organization ID
     *
     * @return string|null
     */
    public function getOrgId(): ?string {
        return $this->_data["orgId"];
    }

    /**
     * Set orgId - Organization ID
     * 
     * @param string|null $org_id Organization ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgId($org_id) {
        return $this->_set("orgId", $org_id);
    }

    /**
     * Get teamName - Team name
     *
     * @return string|null
     */
    public function getTeamName(): ?string {
        return $this->_data["teamName"];
    }

    /**
     * Set teamName - Team name
     * 
     * @param string|null $team_name Team name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTeamName($team_name) {
        return $this->_set("teamName", $team_name);
    }

    /**
     * Get createdAt - Created timestamp
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string {
        return $this->_data["createdAt"];
    }

    /**
     * Set createdAt - Created timestamp
     * 
     * @param string|null $created_at Created timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreatedAt($created_at) {
        return $this->_set("createdAt", $created_at);
    }

    /**
     * Get updatedAt - Updated timestamp
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string {
        return $this->_data["updatedAt"];
    }

    /**
     * Set updatedAt - Updated timestamp
     * 
     * @param string|null $updated_at Updated timestamp
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUpdatedAt($updated_at) {
        return $this->_set("updatedAt", $updated_at);
    }
}
