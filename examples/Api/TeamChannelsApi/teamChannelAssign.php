<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/TeamChannelsApi/#teamchannelassign
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

// User ID
$arg_user_id = "user-id-***";

// Organization ID
$arg_x_org_id = "org-id-***";

try {

    /**
     * PUT /teams/{teamId}/channel/{channelId}/user/{userId}
     * 
     * @var \Kronup\Model\User $response
     */
    $response = $sdk
        ->api()
        ->teamChannels()
        ->teamChannelAssign($arg_team_id, $arg_channel_id, $arg_user_id, $arg_x_org_id);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->teamChannels()->teamChannelAssign(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->teamChannels()->teamChannelAssign(): %s\n", 
        $exc->getMessage()
    );
}