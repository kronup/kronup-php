<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://php.kronup.com/Api/TasksApi/#discoverycreate
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

// Feature ID
$arg_feature_id = "fff";

// Task ID
$arg_task_id = "fff";

$arg_payload_task_discovery_create = (new \Kronup\Model\PayloadTaskDiscoveryCreate())
    
    // (optional) Discovery details
    ->setDetails('null');

try {
    /**
     * POST /teams/{teamId}/channels/{channelId}/features/{featureId}/tasks/{taskId}/discoveries
     * 
     * @var \Kronup\Model\MinuteDiscovery $response
     */
    $response = $sdk
        ->api()
        ->tasks()
        ->discoveryCreate($arg_team_id, $arg_channel_id, $arg_feature_id, $arg_task_id, $arg_payload_task_discovery_create);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tasks()->discoveryCreate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tasks()->discoveryCreate(): %s\n", 
        $exc->getMessage()
    );
}