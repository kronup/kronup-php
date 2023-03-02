<?php

/**
 * Request_Organization_Update Model
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
 * Request_Organization_Update Model
 */
class RequestOrganizationUpdate extends AbstractModel {

    public const _D = null;
    protected static $_name = "Request_Organization_Update";
    protected static $_definition = [
        "orgName" => ["orgName", "string", null, "getOrgName", "setOrgName", null, ["r" => 0, "nl" => 3, "xl" => 64]]
    ];

    /**
     * RequestOrganizationUpdate
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get orgName
     *
     * @return string|null
     */
    public function getOrgName(): ?string {
        return $this->_data["orgName"];
    }

    /**
     * Set orgName
     * 
     * @param string|null $org_name Organization name
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOrgName($org_name) {
        return $this->_set("orgName", $org_name);
    }
}
