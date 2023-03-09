<?php

/**
 * Implementation of Experience API
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
 * API for Experience
 */
class ExperienceApi extends AbstractApi {
    
    /**
     * API package
     */
    const PKG = "Experience";

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
    public function evaluatePeer($notion_id, $user_id, $grade, $x_org_id) {
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
    public function evaluateSelf($notion_id, $grade, $x_org_id) {
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
    
}
