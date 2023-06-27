<?php

/**
 * Implementation of Invitations API
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
 * API for Invitations
 */
class InvitationsApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Invitations";

    /**
     * Accept invitation
     *
     * @param string $invite_id Invitation ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Invitation
     */
    public function accept($invite_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/invitations/{inviteId}";
        
        /** @var \Kronup\Model\Invitation $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "PUT", S::parse($rPath, ["inviteId" => $invite_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\Invitation"
        );
            
        return $result;
    }
    
    /**
     * Create invitation
     *
     * @param \Kronup\Model\PayloadInvitationCreate $payload_invitation_create 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Invitation
     */
    public function create($payload_invitation_create) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/invitations";
        
        /** @var \Kronup\Model\Invitation $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", $rPath, $rPath, [], $rHeaders, [], $payload_invitation_create
            ), 
            "\Kronup\Model\Invitation"
        );
            
        return $result;
    }
    
    /**
     * Delete invitation
     *
     * @param string $invite_id Invitation ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function delete($invite_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/invitations/{inviteId}";
        
        /** @var bool $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", S::parse($rPath, ["inviteId" => $invite_id]), $rPath, [], $rHeaders, []
            ), 
            "bool"
        );
            
        return $result;
    }
    
    /**
     * List invitations
     *
     * @param int|1 $page_number Pagination: page number
     * @param int|100 $page_size Pagination: page size
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\InvitationsList
     */
    public function list($page_number = 1, $page_size = 100) {
        if (isset($page_number) && $page_number < 1) {
            throw new IAE('Invalid value for "$page_number" when calling InvitationsApi., must be bigger than or equal to 1.');
        }

        if (isset($page_size) && $page_size > 500) {
            throw new IAE('Invalid value for "$page_size" when calling InvitationsApi., must be smaller than or equal to 500');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling InvitationsApi., must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/invitations";
        
        /** @var \Kronup\Model\InvitationsList $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", $rPath, $rPath, [
                    "pageNumber" => S::toQueryValue($page_number),
                    "pageSize" => S::toQueryValue($page_size),
                ], $rHeaders, []
            ), 
            "\Kronup\Model\InvitationsList"
        );
            
        return $result;
    }
    
    /**
     * Fetch invitation
     *
     * @param string $invite_id Invitation ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Invitation
     */
    public function read($invite_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/invitations/{inviteId}";
        
        /** @var \Kronup\Model\Invitation $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["inviteId" => $invite_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\Invitation"
        );
            
        return $result;
    }
    
    /**
     * Update invitation
     *
     * @param string $invite_id Invitation ID
     * @param \Kronup\Model\PayloadInvitationUpdate $payload_invitation_update 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Invitation
     */
    public function update($invite_id, $payload_invitation_update) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/invitations/{inviteId}";
        
        /** @var \Kronup\Model\Invitation $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["inviteId" => $invite_id]), $rPath, [], $rHeaders, [], $payload_invitation_update
            ), 
            "\Kronup\Model\Invitation"
        );
            
        return $result;
    }
    
}
