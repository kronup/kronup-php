<?php

/**
 * Implementation of Teams API
 *
 * @copyright (c) 2022-2023 kronup.io
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 *
 * NOTE: This class is auto-generated by kronup.io
 * Do not edit this file manually!
 */

namespace Kronup\Api;
!defined("KRONUP-SDK") && exit();

use InvalidArgumentException as IAE;
use Kronup\Sdk\Serializer as S;

/**
 * API for Teams
 */
class TeamsApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Teams";

    /**
     * Assign to team
     *
     * @param string $team_id Team ID
     * @param string $user_id User ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\User
     */
    public function assign($team_id, $user_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/teams/{teamId}/users/{userId}";
        
        /** @var \Kronup\Model\User $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "PUT", S::parse($rPath, ["teamId" => $team_id, "userId" => $user_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\User"
        );
            
        return $result;
    }
    
    /**
     * Create team
     *
     * @param \Kronup\Model\PayloadTeamCreate $payload_team_create 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\TeamExtended
     */
    public function create($payload_team_create) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/teams";
        
        /** @var \Kronup\Model\TeamExtended $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $payload_team_create
            ), 
            "\Kronup\Model\TeamExtended"
        );
            
        return $result;
    }
    
    /**
     * Delete team
     *
     * @param string $team_id Team ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function delete($team_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/teams/{teamId}";
        
        /** @var bool $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", S::parse($rPath, ["teamId" => $team_id]), $rPath, [], $rHeaders, []
            ), 
            "bool"
        );
            
        return $result;
    }
    
    /**
     * List all teams
     *
     * @param int|1 $page_number Pagination: page number
     * @param int|100 $page_size Pagination: page size
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\TeamsList
     */
    public function listAll($page_number = 1, $page_size = 100) {
        if (isset($page_number) && $page_number < 1) {
            throw new IAE('Invalid value for "$page_number" when calling TeamsApi., must be bigger than or equal to 1.');
        }

        if (isset($page_size) && $page_size > 500) {
            throw new IAE('Invalid value for "$page_size" when calling TeamsApi., must be smaller than or equal to 500');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling TeamsApi., must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/teams";
        
        /** @var \Kronup\Model\TeamsList $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", $rPath, $rPath, [
                    "pageNumber" => S::toQueryValue($page_number),
                    "pageSize" => S::toQueryValue($page_size),
                ], $rHeaders, []
            ), 
            "\Kronup\Model\TeamsList"
        );
            
        return $result;
    }
    
    /**
     * List user teams
     *
     * @param string $user_id User ID
     * @param int|1 $page_number Pagination: page number
     * @param int|100 $page_size Pagination: page size
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\TeamsExtendedList
     */
    public function listUser($user_id, $page_number = 1, $page_size = 100) {
        if (isset($page_number) && $page_number < 1) {
            throw new IAE('Invalid value for "$page_number" when calling TeamsApi., must be bigger than or equal to 1.');
        }

        if (isset($page_size) && $page_size > 500) {
            throw new IAE('Invalid value for "$page_size" when calling TeamsApi., must be smaller than or equal to 500');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling TeamsApi., must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/teams/users/{userId}";
        
        /** @var \Kronup\Model\TeamsExtendedList $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["userId" => $user_id]), $rPath, [
                    "pageNumber" => S::toQueryValue($page_number),
                    "pageSize" => S::toQueryValue($page_size),
                ], $rHeaders, []
            ), 
            "\Kronup\Model\TeamsExtendedList"
        );
            
        return $result;
    }
    
    /**
     * Fetch team
     *
     * @param string $team_id Team ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\TeamExtended
     */
    public function read($team_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/teams/{teamId}";
        
        /** @var \Kronup\Model\TeamExtended $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["teamId" => $team_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\TeamExtended"
        );
            
        return $result;
    }
    
    /**
     * Unassign from team
     *
     * @param string $team_id Team ID
     * @param string $user_id User ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function unassign($team_id, $user_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/teams/{teamId}/users/{userId}";
        
        /** @var bool $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", S::parse($rPath, ["teamId" => $team_id, "userId" => $user_id]), $rPath, [], $rHeaders, []
            ), 
            "bool"
        );
            
        return $result;
    }
    
    /**
     * Update team
     *
     * @param string $team_id Team ID
     * @param \Kronup\Model\PayloadTeamUpdate $payload_team_update 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\TeamExtended
     */
    public function update($team_id, $payload_team_update) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/teams/{teamId}";
        
        /** @var \Kronup\Model\TeamExtended $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["teamId" => $team_id]), $rPath, [], $rHeaders, [], $payload_team_update
            ), 
            "\Kronup\Model\TeamExtended"
        );
            
        return $result;
    }
    
}
