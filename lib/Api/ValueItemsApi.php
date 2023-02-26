<?php

/**
 * Implementation of ValueItems API
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
 * API for ValueItems
 */
class ValueItemsApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Value items";

    /**
     * Create value item
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $x_org_id Organization ID
     * @param \Kronup\Model\ValueItemCreateRequest $value_item_create_request 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\ValueItem
     */
    public function valueItemCreate($team_id, $channel_id, $x_org_id, $value_item_create_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/items";
        
        /** @var \Kronup\Model\ValueItem $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id]), $rPath, [], $rHeaders, [], $value_item_create_request
            ), 
            "\Kronup\Model\ValueItem"
        );
            
        return $result;
    }
    
    /**
     * List value items
     *
     * @param string $team_id Team ID
     * @param string $channel_id Channel ID
     * @param string $x_org_id Organization ID
     * @param int|1 $page_number Pagination: page number
     * @param int|100 $page_size Pagination: page size
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\ValueItemList
     */
    public function valueItemList($team_id, $channel_id, $x_org_id, $page_number = 1, $page_size = 100) {
        if (isset($page_number) && $page_number < 1) {
            throw new IAE('Invalid value for "$page_number" when calling ValueItemsApi.valueItemList, must be bigger than or equal to 1.');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling ValueItemsApi.valueItemList, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/teams/{teamId}/channels/{channelId}/items";
        
        /** @var \Kronup\Model\ValueItemList $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["teamId" => $team_id, "channelId" => $channel_id]), $rPath, [
                    "pageNumber" => S::toQueryValue($page_number),
                    "pageSize" => S::toQueryValue($page_size),
                ], $rHeaders, []
            ), 
            "\Kronup\Model\ValueItemList"
        );
            
        return $result;
    }
    
}
