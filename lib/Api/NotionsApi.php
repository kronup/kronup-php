<?php

/**
 * Implementation of Notions API
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
 * API for Notions
 */
class NotionsApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Notions";

    /**
     * Create notion
     *
     * @param \Kronup\Model\PayloadNotionCreate $payload_notion_create 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Notion
     */
    public function create($payload_notion_create) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/notions";
        
        /** @var \Kronup\Model\Notion $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $payload_notion_create
            ), 
            "\Kronup\Model\Notion"
        );
            
        return $result;
    }
    
    /**
     * Delete notion
     *
     * @param string $notion_id Notion ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function delete($notion_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/notions/{notionId}";
        
        /** @var bool $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", S::parse($rPath, ["notionId" => $notion_id]), $rPath, [], $rHeaders, []
            ), 
            "bool"
        );
            
        return $result;
    }
    
    /**
     * Fetch notion
     *
     * @param string $notion_id Notion ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Notion
     */
    public function read($notion_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/notions/{notionId}";
        
        /** @var \Kronup\Model\Notion $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["notionId" => $notion_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\Notion"
        );
            
        return $result;
    }
    
    /**
     * Search notions
     *
     * @param string|null $search_term Search term
     * @param int|1 $page_number 
     * @param int|500 $page_size 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\NotionsList
     */
    public function search($search_term = null, $page_number = 1, $page_size = 500) {
        if (isset($page_number) && $page_number < 1) {
            throw new IAE('Invalid value for "$page_number" when calling NotionsApi., must be bigger than or equal to 1.');
        }

        if (isset($page_size) && $page_size > 1500) {
            throw new IAE('Invalid value for "$page_size" when calling NotionsApi., must be smaller than or equal to 1500');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling NotionsApi., must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/notions";
        
        /** @var \Kronup\Model\NotionsList $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", $rPath, $rPath, [
                    "searchTerm" => isset($search_term) ? S::toQueryValue($search_term) : null,
                    "pageNumber" => S::toQueryValue($page_number),
                    "pageSize" => S::toQueryValue($page_size),
                ], $rHeaders, []
            ), 
            "\Kronup\Model\NotionsList"
        );
            
        return $result;
    }
    
    /**
     * Update notion
     *
     * @param string $notion_id Notion ID
     * @param \Kronup\Model\PayloadNotionUpdate $payload_notion_update 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Notion
     */
    public function update($notion_id, $payload_notion_update) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/notions/{notionId}";
        
        /** @var \Kronup\Model\Notion $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["notionId" => $notion_id]), $rPath, [], $rHeaders, [], $payload_notion_update
            ), 
            "\Kronup\Model\Notion"
        );
            
        return $result;
    }
    
}
