<?php

/**
 * Implementation of Experiences API
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
 * API for Experiences
 */
class ExperiencesApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Experiences";

    /**
     * Evaluate peer
     *
     * @param string $notion_id Notion ID
     * @param string $user_id User ID
     * @param string $grade Grade between 1 and 10
     * @param string $x_org_id Organization ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Experience
     */
    public function experienceEvaluatePeer($notion_id, $user_id, $grade, $x_org_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/xp/notions/{notionId}/users/{userId}/grade/{grade}";
        
        /** @var \Kronup\Model\Experience $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "PUT", S::parse($rPath, ["notionId" => $notion_id, "userId" => $user_id, "grade" => $grade]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\Experience"
        );
            
        return $result;
    }
    
    /**
     * Self-evaluation
     *
     * @param string $notion_id Notion ID
     * @param string $grade Grade between 1 and 10
     * @param string $x_org_id Organization ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Experience
     */
    public function experienceEvaluateSelf($notion_id, $grade, $x_org_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/xp/notions/{notionId}/grade/{grade}";
        
        /** @var \Kronup\Model\Experience $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "PUT", S::parse($rPath, ["notionId" => $notion_id, "grade" => $grade]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\Experience"
        );
            
        return $result;
    }
    
    /**
     * Fetch notion experience
     *
     * @param string $notion_id Notion ID
     * @param string $user_id User ID
     * @param string $x_org_id Organization ID
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\Experience
     */
    public function experienceRead($notion_id, $user_id, $x_org_id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/xp/notions/{notionId}/users/{userId}";
        
        /** @var \Kronup\Model\Experience $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["notionId" => $notion_id, "userId" => $user_id]), $rPath, [], $rHeaders, []
            ), 
            "\Kronup\Model\Experience"
        );
            
        return $result;
    }
    
    /**
     * Fetch all experiences
     *
     * @param string $user_id User ID
     * @param string $x_org_id Organization ID
     * @param int|1 $page_number Pagination: page number
     * @param int|100 $page_size Pagination: page size
     * @throws \Kronup\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Kronup\Model\ExperiencesList
     */
    public function experiencesList($user_id, $x_org_id, $page_number = 1, $page_size = 100) {
        if (isset($page_number) && $page_number < 1) {
            throw new IAE('Invalid value for "$page_number" when calling ExperiencesApi.experiencesList, must be bigger than or equal to 1.');
        }

        if (isset($page_size) && $page_size > 500) {
            throw new IAE('Invalid value for "$page_size" when calling ExperiencesApi.experiencesList, must be smaller than or equal to 500');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling ExperiencesApi.experiencesList, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-org-id" => S::toHeaderValue($x_org_id),
            ], 
            $rHeaders
        );

        // Path template
        $rPath = "/xp/users/{userId}";
        
        /** @var \Kronup\Model\ExperiencesList $result */
        $result = $this->exec(
            S::createRequest(
                $this->_sdk->config(), self::PKG, "GET", S::parse($rPath, ["userId" => $user_id]), $rPath, [
                    "pageNumber" => S::toQueryValue($page_number),
                    "pageSize" => S::toQueryValue($page_size),
                ], $rHeaders, []
            ), 
            "\Kronup\Model\ExperiencesList"
        );
            
        return $result;
    }
    
}
