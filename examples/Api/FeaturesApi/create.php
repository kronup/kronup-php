<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://php.kronup.com/Api/FeaturesApi/#create
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

// Team ID
$arg_team_id = "fff";

// Channel ID
$arg_channel_id = "fff";

$arg_payload_feature_create = (new \Kronup\Model\PayloadFeatureCreate())
    
    // (optional) Feature heading
    ->setHeading('Feature name')
    
    // (optional) Feature description
    ->setDetails('Feature description')
    
    // (optional) Feature Focus
    ->setFocus('firmitas')
    
    // (optional) Feature priority
    ->setPriority(1);

try {
    /**
     * POST /teams/{teamId}/channels/{channelId}/features
     * 
     * @var \Kronup\Model\Feature $response
     */
    $response = $sdk
        ->api()
        ->features()
        ->create($arg_team_id, $arg_channel_id, $arg_payload_feature_create);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->features()->create(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->features()->create(): %s\n", 
        $exc->getMessage()
    );
}