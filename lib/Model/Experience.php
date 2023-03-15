<?php

/**
 * Experience Model
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
 * Experience Model
 */
class Experience extends AbstractModel {

    public const _D = null;
    protected static $_name = "Experience";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "orgId" => ["orgId", "string", null, "getOrgId", "setOrgId", null, ["r" => 0]], 
        "userId" => ["userId", "string", null, "getUserId", "setUserId", null, ["r" => 0]], 
        "notion" => ["notion", "\Kronup\Model\Notion", null, "getNotion", "setNotion", null, ["r" => 0]], 
        "selfEval" => ["selfEval", "\Kronup\Model\EvaluationsSelf", null, "getSelfEval", "setSelfEval", null, ["r" => 0]], 
        "peerEval" => ["peerEval", "\Kronup\Model\EvaluationsPeers", null, "getPeerEval", "setPeerEval", null, ["r" => 0]]
    ];

    /**
     * Experience
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
     * Get userId - User ID
     *
     * @return string|null
     */
    public function getUserId(): ?string {
        return $this->_data["userId"];
    }

    /**
     * Set userId - User ID
     * 
     * @param string|null $user_id User ID
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserId($user_id) {
        return $this->_set("userId", $user_id);
    }

    /**
     * Get notion - 
     *
     * @return \Kronup\Model\Notion|null
     */
    public function getNotion(): ?\Kronup\Model\Notion {
        return $this->_data["notion"];
    }

    /**
     * Set notion - 
     * 
     * @param \Kronup\Model\Notion|null $notion
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNotion($notion) {
        return $this->_set("notion", $notion);
    }

    /**
     * Get selfEval - 
     *
     * @return \Kronup\Model\EvaluationsSelf|null
     */
    public function getSelfEval(): ?\Kronup\Model\EvaluationsSelf {
        return $this->_data["selfEval"];
    }

    /**
     * Set selfEval - 
     * 
     * @param \Kronup\Model\EvaluationsSelf|null $self_eval
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSelfEval($self_eval) {
        return $this->_set("selfEval", $self_eval);
    }

    /**
     * Get peerEval - 
     *
     * @return \Kronup\Model\EvaluationsPeers|null
     */
    public function getPeerEval(): ?\Kronup\Model\EvaluationsPeers {
        return $this->_data["peerEval"];
    }

    /**
     * Set peerEval - 
     * 
     * @param \Kronup\Model\EvaluationsPeers|null $peer_eval
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPeerEval($peer_eval) {
        return $this->_set("peerEval", $peer_eval);
    }
}