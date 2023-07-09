<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/BillingApi/#subscriptionupdate
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

// Price Plan ID
$arg_price_plan_id = "000000000000000000000000";

try {
    /**
     * PUT /billing/subscription/price-plans/{pricePlanId}
     * 
     * @var \Kronup\Model\Subscription $response
     */
    $response = $sdk
        ->api()
        ->billing()
        ->subscriptionUpdate($arg_price_plan_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->billing()->subscriptionUpdate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->billing()->subscriptionUpdate(): %s\n", 
        $exc->getMessage()
    );
}