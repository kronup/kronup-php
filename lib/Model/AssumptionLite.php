<?php

/**
 * AssumptionLite Model
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
 * AssumptionLite Model
 * 
 * Value Item Assumption
 */
class AssumptionLite extends AbstractModel {

    public const _D = null;
    protected static $_name = "AssumptionLite";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "authorUserId" => ["authorUserId", "string", null, "getAuthorUserId", "setAuthorUserId", null, ["r" => 0]], 
        "experiment" => ["experiment", "\Kronup\Model\ExperimentLite", null, "getExperiment", "setExperiment", null, ["r" => 0]]
    ];

    /**
     * AssumptionLite
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get id - Value item ID
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id - Value item ID
     * 
     * @param string|null $id Value item ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId($id) {
        return $this->_set("id", $id);
    }

    /**
     * Get authorUserId - User ID
     *
     * @return string|null
     */
    public function getAuthorUserId(): ?string {
        return $this->_data["authorUserId"];
    }

    /**
     * Set authorUserId - User ID
     * 
     * @param string|null $author_user_id User ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthorUserId($author_user_id) {
        return $this->_set("authorUserId", $author_user_id);
    }

    /**
     * Get experiment - 
     *
     * @return \Kronup\Model\ExperimentLite|null
     */
    public function getExperiment(): ?\Kronup\Model\ExperimentLite {
        return $this->_data["experiment"];
    }

    /**
     * Set experiment - 
     * 
     * @param \Kronup\Model\ExperimentLite|null $experiment
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setExperiment($experiment) {
        return $this->_set("experiment", $experiment);
    }
}
