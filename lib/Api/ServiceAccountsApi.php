<?php

/**
 * Implementation of ServiceAccounts API
 *
 * @copyright (c) 2022-2023 kronup.io
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
 * API for ServiceAccounts
 */
class ServiceAccountsApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Service accounts";

    /**
     * Close service account
     *
     * @param string $account_id Service account ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\ServiceAccount
     */
    public function close($account_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/service-accounts/{accountId}";
        
        /** @var \Kronup\Model\ServiceAccount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", S::parse($rPath, ["accountId" => $account_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\ServiceAccount"
        );
            
        return $result;
    }
    
    /**
     * Create service account
     *
     * @param \Kronup\Model\PayloadServiceAccountCreate $payload_service_account_create 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\ServiceAccount
     */
    public function create($payload_service_account_create) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/service-accounts";
        
        /** @var \Kronup\Model\ServiceAccount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $payload_service_account_create
            ), 
            "\Kronup\Model\ServiceAccount"
        );
            
        return $result;
    }
    
    /**
     * List service acounts
     *
     * @param int|1 $page_number 
     * @param int|500 $page_size 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\ServiceAccountsList
     */
    public function list($page_number = 1, $page_size = 500) {
        if (isset($page_number) && $page_number < 1) {
            throw new IAE('Invalid value for "$page_number" when calling ServiceAccountsApi., must be bigger than or equal to 1.');
        }

        if (isset($page_size) && $page_size > 1500) {
            throw new IAE('Invalid value for "$page_size" when calling ServiceAccountsApi., must be smaller than or equal to 1500');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling ServiceAccountsApi., must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/service-accounts";
        
        /** @var \Kronup\Model\ServiceAccountsList $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", $rPath, $rPath, [
                    "pageNumber" => S::toQueryValue($page_number),
                    "pageSize" => S::toQueryValue($page_size),
                ], $rHeaders, []
            ), 
            "\Kronup\Model\ServiceAccountsList"
        );
            
        return $result;
    }
    
    /**
     * Fetch service account
     *
     * @param string $account_id Service Account ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\ServiceAccount
     */
    public function read($account_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/service-accounts/{accountId}";
        
        /** @var \Kronup\Model\ServiceAccount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["accountId" => $account_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\ServiceAccount"
        );
            
        return $result;
    }
    
    /**
     * Regenerate
     *
     * @param string $account_id Service account ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\ServiceAccount
     */
    public function regenerate($account_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/service-accounts/{accountId}";
        
        /** @var \Kronup\Model\ServiceAccount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "PUT", S::parse($rPath, ["accountId" => $account_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\ServiceAccount"
        );
            
        return $result;
    }
    
    /**
     * Update service account
     *
     * @param string $account_id Service account ID
     * @param \Kronup\Model\PayloadServiceAccountUpdate $payload_service_account_update 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\ServiceAccount
     */
    public function update($account_id, $payload_service_account_update) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/service-accounts/{accountId}";
        
        /** @var \Kronup\Model\ServiceAccount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["accountId" => $account_id]), $rPath, [], $rHeaders, [], $payload_service_account_update
            ), 
            "\Kronup\Model\ServiceAccount"
        );
            
        return $result;
    }
    
}
