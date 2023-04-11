<?php

/**
 * Implementation of Users API
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
 * API for Users
 */
class UsersApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Users";

    /**
     * List users
     *
     * @param string $x_org_id Organization ID
     * @param int|1 $page_number Pagination: page number
     * @param int|100 $page_size Pagination: page size
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\UsersList
     */
    public function userList($x_org_id, $page_number = 1, $page_size = 100) {
        if (isset($page_number) && $page_number < 1) {
            throw new IAE('Invalid value for "$page_number" when calling UsersApi.userList, must be bigger than or equal to 1.');
        }

        if (isset($page_size) && $page_size > 500) {
            throw new IAE('Invalid value for "$page_size" when calling UsersApi.userList, must be smaller than or equal to 500');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling UsersApi.userList, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/users";
        
        /** @var \Kronup\Model\UsersList $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", $rPath, $rPath, [
                    "pageNumber" => S::toQueryValue($page_number),
                    "pageSize" => S::toQueryValue($page_size),
                ], $rHeaders, []
            ), 
            "\Kronup\Model\UsersList"
        );
            
        return $result;
    }
    
    /**
     * Fetch user
     *
     * @param string $user_id User ID
     * @param string $x_org_id Organization ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\User
     */
    public function userRead($user_id, $x_org_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/users/{userId}";
        
        /** @var \Kronup\Model\User $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["userId" => $user_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\User"
        );
            
        return $result;
    }
    
    /**
     * Remove user
     *
     * @param string $user_id User ID
     * @param string $x_org_id Organization ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\User
     */
    public function userRemove($user_id, $x_org_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/users/{userId}";
        
        /** @var \Kronup\Model\User $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "DELETE", S::parse($rPath, ["userId" => $user_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\User"
        );
            
        return $result;
    }
    
    /**
     * Update roles
     *
     * @param string $user_id User ID
     * @param string $x_org_id Organization ID
     * @param \Kronup\Model\PayloadUserRoleUpdate $payload_user_role_update 
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\UserRoles
     */
    public function userUpdateRole($user_id, $x_org_id, $payload_user_role_update) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/users/{userId}";
        
        /** @var \Kronup\Model\UserRoles $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "POST", S::parse($rPath, ["userId" => $user_id]), $rPath, [], $rHeaders, [], $payload_user_role_update
            ), 
            "\Kronup\Model\UserRoles"
        );
            
        return $result;
    }
    
}
