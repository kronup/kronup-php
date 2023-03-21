<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/ServiceAccountsApi/#serviceaccountcreate
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

// Organization ID
$arg_x_org_id = "org-id-***";

$arg_payload_service_account_create = (new \Kronup\Model\PayloadServiceAccountCreate())
    
    // Service Account organization role
    ->setRoleOrg('null')
    
    // Service account name
    ->setUserName('John Doe');

try {

    /**
     * POST /service-accounts
     * 
     * @var \Kronup\Model\ServiceAccount $response
     */
    $response = $sdk
        ->api()
        ->serviceAccounts()
        ->serviceAccountCreate($arg_x_org_id, $arg_payload_service_account_create);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->serviceAccounts()->serviceAccountCreate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->serviceAccounts()->serviceAccountCreate(): %s\n", 
        $exc->getMessage()
    );
}