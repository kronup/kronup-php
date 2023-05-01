<?php

/**
 * Implementation of Organizations API
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
 * API for Organizations
 */
class OrganizationsApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Organizations";

    /**
     * Create organization
     *
     * @param \Kronup\Model\PayloadOrganizationCreate $payload_organization_create 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Organization
     */
    public function create($payload_organization_create) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/organizations";
        
        /** @var \Kronup\Model\Organization $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $payload_organization_create
            ), 
            "\Kronup\Model\Organization"
        );
            
        return $result;
    }
    
    /**
     * Delete organization
     *
     * @param string $org_id Organization ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function delete($org_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/organizations/{orgId}";
        
        /** @var bool $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", S::parse($rPath, ["orgId" => $org_id]), $rPath, [], $rHeaders, []
            ), 
            "bool"
        );
            
        return $result;
    }
    
    /**
     * Update logo
     *
     * @param string $org_id Organization ID
     * @param \SplFileObject|null $logo Logo - must be a PNG file, exactly 256x256 pixels, smaller than 200KB
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Organization
     */
    public function logo($org_id, $logo = null) {
        $rHeaders = $this->_headerSelector->selectHeadersForMultipart(["application/json"]);

        // Path template
        $rPath = "/organizations/{orgId}/logo";
        
        /** @var \Kronup\Model\Organization $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["orgId" => $org_id]), $rPath, [], $rHeaders, ["logo" => S::fileToFormValue($logo),]
            ), 
            "\Kronup\Model\Organization"
        );
            
        return $result;
    }
    
    /**
     * Update organization
     *
     * @param string $org_id Organization ID
     * @param \Kronup\Model\PayloadOrganizationUpdate $payload_organization_update 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Organization
     */
    public function update($org_id, $payload_organization_update) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/organizations/{orgId}";
        
        /** @var \Kronup\Model\Organization $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["orgId" => $org_id]), $rPath, [], $rHeaders, [], $payload_organization_update
            ), 
            "\Kronup\Model\Organization"
        );
            
        return $result;
    }
    
}
