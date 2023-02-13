<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/UsersApi/#userremove
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";


// User ID
$arg_id = "user-id-xxxx";

// Organization ID
$arg_x_org_id = "org-id-xxxx";

try {

    /**
     * DELETE /users/{id}
     */
    $sdk
        ->api()
        ->users()
        ->userRemove($arg_id, $arg_x_org_id);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->users()->userRemove(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->users()->userRemove(): %s\n", 
        $exc->getMessage()
    );
}