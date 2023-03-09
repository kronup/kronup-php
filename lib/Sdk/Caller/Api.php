<?php

/**
 * kronup sdk Caller - API
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
     * Assumptions API
     *
     * @var \Kronup\Api\AssumptionsApi
     */
    protected $_assumptionsApi = null;

    /**
     * Channels API
     *
     * @var \Kronup\Api\ChannelsApi
     */
    protected $_channelsApi = null;

    /**
     * Experience API
     *
     * @var \Kronup\Api\ExperienceApi
     */
    protected $_experienceApi = null;

    /**
     * Invitations API
     *
     * @var \Kronup\Api\InvitationsApi
     */
    protected $_invitationsApi = null;

    /**
     * Notions API
     *
     * @var \Kronup\Api\NotionsApi
     */
    protected $_notionsApi = null;

    /**
     * Organizations API
     *
     * @var \Kronup\Api\OrganizationsApi
     */
    protected $_organizationsApi = null;

    /**
     * Tasks API
     *
     * @var \Kronup\Api\TasksApi
     */
    protected $_tasksApi = null;

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
     * Assumptions API
     * 
     * @return \Kronup\Api\AssumptionsApi
     */
    public function assumptions(): A\AssumptionsApi {
        if (null === $this->_assumptionsApi) {
            $this->_assumptionsApi = new A\AssumptionsApi($this->_sdk);
        }

        return $this->_assumptionsApi;
    }
    
    /**
     * Channels API
     * 
     * @return \Kronup\Api\ChannelsApi
     */
    public function channels(): A\ChannelsApi {
        if (null === $this->_channelsApi) {
            $this->_channelsApi = new A\ChannelsApi($this->_sdk);
        }

        return $this->_channelsApi;
    }
    
    /**
     * Experience API
     * 
     * @return \Kronup\Api\ExperienceApi
     */
    public function experience(): A\ExperienceApi {
        if (null === $this->_experienceApi) {
            $this->_experienceApi = new A\ExperienceApi($this->_sdk);
        }

        return $this->_experienceApi;
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
     * Notions API
     * 
     * @return \Kronup\Api\NotionsApi
     */
    public function notions(): A\NotionsApi {
        if (null === $this->_notionsApi) {
            $this->_notionsApi = new A\NotionsApi($this->_sdk);
        }

        return $this->_notionsApi;
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
     * Tasks API
     * 
     * @return \Kronup\Api\TasksApi
     */
    public function tasks(): A\TasksApi {
        if (null === $this->_tasksApi) {
            $this->_tasksApi = new A\TasksApi($this->_sdk);
        }

        return $this->_tasksApi;
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
