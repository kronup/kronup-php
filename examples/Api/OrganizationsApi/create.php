<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://php.kronup.com/Api/OrganizationsApi/#create
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// 🐛 Enable debugging
$sdk->config()->setDebug(true);

$arg_payload_organization_create = (new \Kronup\Model\PayloadOrganizationCreate())
    
    // (optional) Organization name
    ->setOrgName('Example, Inc.');

try {
    /**
     * POST /organizations
     * 
     * @var \Kronup\Model\Organization $response
     */
    $response = $sdk
        ->api()
        ->organizations()
        ->create($arg_payload_organization_create);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->organizations()->create(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->organizations()->create(): %s\n", 
        $exc->getMessage()
    );
}