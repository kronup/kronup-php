<?php

/**
 * Implementation of Account API
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
 * API for Account
 */
class AccountApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Account";

    /**
     * Delete account
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Account
     */
    public function accountDelete() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/account";
        
        /** @var \Kronup\Model\Account $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", $rPath, $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\Account"
        );
            
        return $result;
    }
    
    /**
     * Fetch account
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Account
     */
    public function accountRead() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/account";
        
        /** @var \Kronup\Model\Account $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", $rPath, $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\Account"
        );
            
        return $result;
    }
    
    /**
     * Update account
     *
     * @param \Kronup\Model\AccountUpdateRequest $account_update_request 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Account
     */
    public function accountUpdate($account_update_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/account";
        
        /** @var \Kronup\Model\Account $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $account_update_request
            ), 
            "\Kronup\Model\Account"
        );
            
        return $result;
    }
    
}
