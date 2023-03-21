<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/ServiceAccountsApi/#serviceaccountupdate
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

// Service account ID
$arg_account_id = "service-account-id-***";

// Organization ID
$arg_x_org_id = "org-id-***";

$arg_payload_service_account_update = (new \Kronup\Model\PayloadServiceAccountUpdate())
    
    // (optional) Service Account organization role
    ->setRoleOrg('null')
    
    // (optional) Service account name
    ->setUserName('John Doe');

try {

    /**
     * POST /service-accounts/{accountId}
     * 
     * @var \Kronup\Model\ServiceAccount $response
     */
    $response = $sdk
        ->api()
        ->serviceAccounts()
        ->serviceAccountUpdate($arg_account_id, $arg_x_org_id, $arg_payload_service_account_update);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->serviceAccounts()->serviceAccountUpdate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->serviceAccounts()->serviceAccountUpdate(): %s\n", 
        $exc->getMessage()
    );
}