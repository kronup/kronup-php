<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/InvitationsApi/#invitationread
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Invitation ID
$arg_invite_id = "invitation-id-***";

try {

    /**
     * GET /invitations/{inviteId}
     * 
     * @var \Kronup\Model\Invitation $response
     */
    $response = $sdk
        ->api()
        ->invitations()
        ->invitationRead($arg_invite_id);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->invitations()->invitationRead(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->invitations()->invitationRead(): %s\n", 
        $exc->getMessage()
    );
}