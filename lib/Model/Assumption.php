<?php

/**
 * Assumption Model
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
 * Assumption Model
 * 
 * Value Item Assumption
 */
class Assumption extends AbstractModel {

    public const _D = null;
    protected static $_name = "Assumption";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "authorUserId" => ["authorUserId", "string", null, "getAuthorUserId", "setAuthorUserId", null, ["r" => 0]], 
        "heading" => ["heading", "string", null, "getHeading", "setHeading", null, ["r" => 0, "nl" => 1, "xl" => 110]], 
        "experiment" => ["experiment", "\Kronup\Model\Experiment", null, "getExperiment", "setExperiment", null, ["r" => 0]]
    ];

    /**
     * Assumption
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
     * Get heading - Assumptions are formulated as simple statements that can be proven true or false; avoid questions and opinions.  > ❌ What are the features? >  > ❌ Does this feature exist? >  > ❌ I don't like this feature. >  > ✅ This feature exists.
     *
     * @return string|null
     */
    public function getHeading(): ?string {
        return $this->_data["heading"];
    }

    /**
     * Set heading - Assumptions are formulated as simple statements that can be proven true or false; avoid questions and opinions.  > ❌ What are the features? >  > ❌ Does this feature exist? >  > ❌ I don't like this feature. >  > ✅ This feature exists.
     * 
     * @param string|null $heading Assumptions are formulated as simple statements that can be proven true or false; avoid questions and opinions.  > ❌ What are the features? >  > ❌ Does this feature exist? >  > ❌ I don't like this feature. >  > ✅ This feature exists.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeading($heading) {
        return $this->_set("heading", $heading);
    }

    /**
     * Get experiment - 
     *
     * @return \Kronup\Model\Experiment|null
     */
    public function getExperiment(): ?\Kronup\Model\Experiment {
        return $this->_data["experiment"];
    }

    /**
     * Set experiment - 
     * 
     * @param \Kronup\Model\Experiment|null $experiment
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setExperiment($experiment) {
        return $this->_set("experiment", $experiment);
    }
}
