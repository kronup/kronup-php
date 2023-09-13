<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://php.kronup.com/Api/TasksApi/#read
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

try {
    /**
     * GET /teams/{teamId}/channels/{channelId}/features/{featureId}/tasks/{taskId}
     * 
     * @var \Kronup\Model\TaskExpanded $response
     */
    $response = $sdk
        ->api()
        ->tasks()
        ->read($arg_team_id, $arg_channel_id, $arg_feature_id, $arg_task_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->tasks()->read(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->tasks()->read(): %s\n", 
        $exc->getMessage()
    );
}