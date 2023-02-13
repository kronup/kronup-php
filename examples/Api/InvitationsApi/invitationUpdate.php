<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/InvitationsApi/#invitationupdate
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
$arg_id = "invitation-id-xxxx";

// Organization ID
$arg_x_org_id = "org-id-xxxx";

$arg_invitation_update_request = (new \Kronup\Model\InvitationUpdateRequest())
    
    // (optional) Invitation name
    ->setInviteName('null')
    
    // (optional) User email domain name. If specified, restrict access to e-mail addresses belonging to this domain.
    ->setInviteDomain('null')
    
    // (optional) User role
    ->setInviteOrgRole('member')
    
    // (optional) The invitation expires after this many days. 0 = no expiration
    ->setInviteExpireDays(5)
    
    // (optional) The invitation expires after being used this many times. 0 = no expiration
    ->setInviteUsesMax(10);

try {

    /**
     * POST /invitations/{id}
     * 
     * @var \Kronup\Model\Invitation $response
     */
    $response = $sdk
        ->api()
        ->invitations()
        ->invitationUpdate($arg_id, $arg_x_org_id, $arg_invitation_update_request);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->invitations()->invitationUpdate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->invitations()->invitationUpdate(): %s\n", 
        $exc->getMessage()
    );
}