<?php

/**
 * Kronup SDK Caller - API
 *
 * @copyright (c) 2022-2023 kronup.com
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://kronup.com/
 *
 * NOTE: This class is auto-generated by kronup.com
 * Do not edit this file manually!
 */

namespace Kronup\Sdk\Caller;
!defined("KRONUP-SDK") && exit();

use Kronup\Sdk;
use Kronup\Api as A;

class Api {
    /**
     * SDK object
     *
     * @var \Kronup\Sdk
     */
    protected $_sdk;

    /**
     * Account API
     *
     * @var \Kronup\Api\AccountApi
     */
    protected $_accountApi = null;

    /**
     * Invitations API
     *
     * @var \Kronup\Api\InvitationsApi
     */
    protected $_invitationsApi = null;

    /**
     * Organizations API
     *
     * @var \Kronup\Api\OrganizationsApi
     */
    protected $_organizationsApi = null;

    /**
     * TeamChannels API
     *
     * @var \Kronup\Api\TeamChannelsApi
     */
    protected $_teamChannelsApi = null;

    /**
     * Teams API
     *
     * @var \Kronup\Api\TeamsApi
     */
    protected $_teamsApi = null;

    /**
     * Users API
     *
     * @var \Kronup\Api\UsersApi
     */
    protected $_usersApi = null;

    /**
     * ValueItems API
     *
     * @var \Kronup\Api\ValueItemsApi
     */
    protected $_valueItemsApi = null;

    /**
     * SDK 
     *
     * @param \Kronup\Sdk $sdk SDK object
     */
    public function __construct(Sdk $sdk) {
        $this->_sdk = $sdk;
    }
    
    /**
     * Account API
     * 
     * @return \Kronup\Api\AccountApi
     */
    public function account(): A\AccountApi {
        if (null === $this->_accountApi) {
            $this->_accountApi = new A\AccountApi($this->_sdk);
        }

        return $this->_accountApi;
    }
    
    /**
     * Invitations API
     * 
     * @return \Kronup\Api\InvitationsApi
     */
    public function invitations(): A\InvitationsApi {
        if (null === $this->_invitationsApi) {
            $this->_invitationsApi = new A\InvitationsApi($this->_sdk);
        }

        return $this->_invitationsApi;
    }
    
    /**
     * Organizations API
     * 
     * @return \Kronup\Api\OrganizationsApi
     */
    public function organizations(): A\OrganizationsApi {
        if (null === $this->_organizationsApi) {
            $this->_organizationsApi = new A\OrganizationsApi($this->_sdk);
        }

        return $this->_organizationsApi;
    }
    
    /**
     * TeamChannels API
     * 
     * @return \Kronup\Api\TeamChannelsApi
     */
    public function teamChannels(): A\TeamChannelsApi {
        if (null === $this->_teamChannelsApi) {
            $this->_teamChannelsApi = new A\TeamChannelsApi($this->_sdk);
        }

        return $this->_teamChannelsApi;
    }
    
    /**
     * Teams API
     * 
     * @return \Kronup\Api\TeamsApi
     */
    public function teams(): A\TeamsApi {
        if (null === $this->_teamsApi) {
            $this->_teamsApi = new A\TeamsApi($this->_sdk);
        }

        return $this->_teamsApi;
    }
    
    /**
     * Users API
     * 
     * @return \Kronup\Api\UsersApi
     */
    public function users(): A\UsersApi {
        if (null === $this->_usersApi) {
            $this->_usersApi = new A\UsersApi($this->_sdk);
        }

        return $this->_usersApi;
    }
    
    /**
     * ValueItems API
     * 
     * @return \Kronup\Api\ValueItemsApi
     */
    public function valueItems(): A\ValueItemsApi {
        if (null === $this->_valueItemsApi) {
            $this->_valueItemsApi = new A\ValueItemsApi($this->_sdk);
        }

        return $this->_valueItemsApi;
    }
}