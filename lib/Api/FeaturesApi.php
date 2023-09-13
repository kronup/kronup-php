<?php

/**
 * Implementation of Features API
 *
 * @copyright (c) 2022-2023 kronup.com
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 *
 * NOTE: This class is auto-generated by Kronup
 * Do not edit this file manually!
 */

namespace Kronup\Api;
!defined("KRONUP-SDK") && exit();

use InvalidArgumentException as IAE;
use Kronup\Sdk\Serializer as S;

/**
 * API for Features
 */
class FeaturesApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Features";

    /**
     * Advance feature
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $feature_id Feature ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Feature
     */
    public function advance($team_id, $channel_id, $feature_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/features/{featureId}";
        
        /** @var \Kronup\Model\Feature $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "PUT", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "featureId" => $feature_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\Feature"
        );
            
        return $result;
    }
    
    /**
     * Create feature
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param \Kronup\Model\PayloadFeatureCreate $payload_feature_create 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Feature
     */
    public function create($team_id, $channel_id, $payload_feature_create) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/features";
        
        /** @var \Kronup\Model\Feature $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id]), $rPath, [], $rHeaders, [], $payload_feature_create
            ), 
            "\Kronup\Model\Feature"
        );
            
        return $result;
    }
    
    /**
     * Delete feature
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $feature_id Feature ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function delete($team_id, $channel_id, $feature_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/features/{featureId}";
        
        /** @var bool $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "featureId" => $feature_id]), $rPath, [], $rHeaders, []
            ), 
            "bool"
        );
            
        return $result;
    }
    
    /**
     * List features
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string|null $stage Feature stage
     * @param int|1 $page_number 
     * @param int|500 $page_size 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\FeaturesList
     */
    public function list($team_id, $channel_id, $stage = null, $page_number = 1, $page_size = 500) {
        if (isset($page_number) && $page_number < 1) {
            throw new IAE('Invalid value for "$page_number" when calling FeaturesApi., must be bigger than or equal to 1.');
        }

        if (isset($page_size) && $page_size > 1500) {
            throw new IAE('Invalid value for "$page_size" when calling FeaturesApi., must be smaller than or equal to 1500');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling FeaturesApi., must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/features";
        
        /** @var \Kronup\Model\FeaturesList $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id]), $rPath, [
                    "stage" => isset($stage) ? S::toQueryValue($stage) : null,
                    "pageNumber" => S::toQueryValue($page_number),
                    "pageSize" => S::toQueryValue($page_size),
                ], $rHeaders, []
            ), 
            "\Kronup\Model\FeaturesList"
        );
            
        return $result;
    }
    
    /**
     * Fetch feature
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $feature_id Feature ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Feature
     */
    public function read($team_id, $channel_id, $feature_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/features/{featureId}";
        
        /** @var \Kronup\Model\Feature $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "featureId" => $feature_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\Feature"
        );
            
        return $result;
    }
    
    /**
     * Update feature
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $feature_id Feature ID
     * @param \Kronup\Model\PayloadFeatureUpdate $payload_feature_update 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Feature
     */
    public function update($team_id, $channel_id, $feature_id, $payload_feature_update) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/features/{featureId}";
        
        /** @var \Kronup\Model\Feature $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "featureId" => $feature_id]), $rPath, [], $rHeaders, [], $payload_feature_update
            ), 
            "\Kronup\Model\Feature"
        );
            
        return $result;
    }
    
}
