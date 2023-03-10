<?php

/**
 * Implementation of Assumptions API
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
 * API for Assumptions
 */
class AssumptionsApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Assumptions";

    /**
     * Create assumption
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $item_id Value Item ID
     * @param string $x_org_id Organization ID
     * @param \Kronup\Model\RequestAssmCreate $request_assm_create 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Assumption
     */
    public function assumptionCreate($team_id, $channel_id, $item_id, $x_org_id, $request_assm_create) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/items/{itemId}/assms";
        
        /** @var \Kronup\Model\Assumption $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "itemId" => $item_id]), $rPath, [], $rHeaders, [], $request_assm_create
            ), 
            "\Kronup\Model\Assumption"
        );
            
        return $result;
    }
    
    /**
     * Delete assumption
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $item_id Value item ID
     * @param string $assm_id Assumption ID
     * @param string $x_org_id Organization ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function assumptionDelete($team_id, $channel_id, $item_id, $assm_id, $x_org_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}";
        
        /** @var bool $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "itemId" => $item_id, "assmId" => $assm_id]), $rPath, [], $rHeaders, []
            ), 
            "bool"
        );
            
        return $result;
    }
    
    /**
     * List assumptions
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $item_id Value Item ID
     * @param string $x_org_id Organization ID
     * @param int|1 $page_number Pagination: page number
     * @param int|100 $page_size Pagination: page size
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\AssumptionsList
     */
    public function assumptionList($team_id, $channel_id, $item_id, $x_org_id, $page_number = 1, $page_size = 100) {
        if (isset($page_number) && $page_number < 1) {
            throw new IAE('Invalid value for "$page_number" when calling AssumptionsApi.assumptionList, must be bigger than or equal to 1.');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling AssumptionsApi.assumptionList, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/items/{itemId}/assms";
        
        /** @var \Kronup\Model\AssumptionsList $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "itemId" => $item_id]), $rPath, [
                    "pageNumber" => S::toQueryValue($page_number),
                    "pageSize" => S::toQueryValue($page_size),
                ], $rHeaders, []
            ), 
            "\Kronup\Model\AssumptionsList"
        );
            
        return $result;
    }
    
    /**
     * Fetch assumption
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $item_id Value item ID
     * @param string $assm_id Assumption ID
     * @param string $x_org_id Organization ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Assumption
     */
    public function assumptionRead($team_id, $channel_id, $item_id, $assm_id, $x_org_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}";
        
        /** @var \Kronup\Model\Assumption $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "itemId" => $item_id, "assmId" => $assm_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\Assumption"
        );
            
        return $result;
    }
    
    /**
     * Update assumption
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $item_id Value item ID
     * @param string $assm_id Assumption ID
     * @param string $x_org_id Organization ID
     * @param \Kronup\Model\RequestAssmUpdate $request_assm_update 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Assumption
     */
    public function assumptionUpdate($team_id, $channel_id, $item_id, $assm_id, $x_org_id, $request_assm_update) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}";
        
        /** @var \Kronup\Model\Assumption $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "itemId" => $item_id, "assmId" => $assm_id]), $rPath, [], $rHeaders, [], $request_assm_update
            ), 
            "\Kronup\Model\Assumption"
        );
            
        return $result;
    }
    
    /**
     * Validate
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $item_id Value item ID
     * @param string $assm_id Assumption ID
     * @param string $x_org_id Organization ID
     * @param \Kronup\Model\RequestAssmValidate $request_assm_validate 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Assumption
     */
    public function assumptionValidate($team_id, $channel_id, $item_id, $assm_id, $x_org_id, $request_assm_validate) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}/exp";
        
        /** @var \Kronup\Model\Assumption $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id, "itemId" => $item_id, "assmId" => $assm_id]), $rPath, [], $rHeaders, [], $request_assm_validate
            ), 
            "\Kronup\Model\Assumption"
        );
            
        return $result;
    }
    
}
