<?php

/**
 * Implementation of Channels API
 *
 * @copyright (c) 2022-2023 kronup.com
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 *
 * NOTE: This class is auto-generated by kronup.com
 * Do not edit this file manually!
 */

namespace Kronup\Api;
!defined("KRONUP-SDK") && exit();

use InvalidArgumentException as IAE;
use Kronup\Sdk\Serializer as S;

/**
 * API for Channels
 */
class ChannelsApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Channels";

    /**
     * Assign to channel
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $user_id User ID
     * @param string $x_org_id Organization ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\User
     */
    public function assign($team_id, $channel_id, $user_id, $x_org_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/users/{userId}";
        
        /** @var \Kronup\Model\User $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "PUT", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "userId" => $user_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\User"
        );
            
        return $result;
    }
    
    /**
     * Create channel
     *
     * @param string $team_id Team ID
     * @param string $x_org_id Organization ID
     * @param \Kronup\Model\PayloadChannelCreate $payload_channel_create 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\TeamExtended
     */
    public function create($team_id, $x_org_id, $payload_channel_create) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels";
        
        /** @var \Kronup\Model\TeamExtended $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["teamId" => $team_id]), $rPath, [], $rHeaders, [], $payload_channel_create
            ), 
            "\Kronup\Model\TeamExtended"
        );
            
        return $result;
    }
    
    /**
     * Delete channel
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $x_org_id Organization ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function delete($team_id, $channel_id, $x_org_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}";
        
        /** @var bool $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id]), $rPath, [], $rHeaders, []
            ), 
            "bool"
        );
            
        return $result;
    }
    
    /**
     * List members
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $x_org_id Organization ID
     * @param int|1 $page_number Pagination: page number
     * @param int|100 $page_size Pagination: page size
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\ChannelMembersList
     */
    public function listMembers($team_id, $channel_id, $x_org_id, $page_number = 1, $page_size = 100) {
        if (isset($page_number) && $page_number < 1) {
            throw new IAE('Invalid value for "$page_number" when calling ChannelsApi., must be bigger than or equal to 1.');
        }

        if (isset($page_size) && $page_size > 500) {
            throw new IAE('Invalid value for "$page_size" when calling ChannelsApi., must be smaller than or equal to 500');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling ChannelsApi., must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/users";
        
        /** @var \Kronup\Model\ChannelMembersList $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id]), $rPath, [
                    "pageNumber" => S::toQueryValue($page_number),
                    "pageSize" => S::toQueryValue($page_size),
                ], $rHeaders, []
            ), 
            "\Kronup\Model\ChannelMembersList"
        );
            
        return $result;
    }
    
    /**
     * Unassign from channel
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $user_id User ID
     * @param string $x_org_id Organization ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function unassign($team_id, $channel_id, $user_id, $x_org_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/users/{userId}";
        
        /** @var bool $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "userId" => $user_id]), $rPath, [], $rHeaders, []
            ), 
            "bool"
        );
            
        return $result;
    }
    
    /**
     * Update channel
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $x_org_id Organization ID
     * @param \Kronup\Model\PayloadChannelUpdate $payload_channel_update 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\TeamExtended
     */
    public function update($team_id, $channel_id, $x_org_id, $payload_channel_update) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}";
        
        /** @var \Kronup\Model\TeamExtended $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id]), $rPath, [], $rHeaders, [], $payload_channel_update
            ), 
            "\Kronup\Model\TeamExtended"
        );
            
        return $result;
    }
    
}
