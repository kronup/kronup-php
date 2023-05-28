<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/TasksApi/#discoverydelete
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
$arg_team_id = "team-id-***";

// Channel ID
$arg_channel_id = "channel-id-***";

// Value Item ID
$arg_item_id = "value-item-id-***";

// Task ID
$arg_task_id = "task-id-***";

// Discovery ID
$arg_discovery_id = "discovery-id-***";

try {
    /**
     * DELETE /teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/discoveries/{discoveryId}
     * 
     * @var bool $response
     */
    $response = $sdk
        ->api()
        ->tasks()
        ->discoveryDelete($arg_team_id, $arg_channel_id, $arg_item_id, $arg_task_id, $arg_discovery_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tasks()->discoveryDelete(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tasks()->discoveryDelete(): %s\n", 
        $exc->getMessage()
    );
}