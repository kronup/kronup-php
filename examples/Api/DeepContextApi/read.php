<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/DeepContextApi/#read
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

// Value item ID
$arg_item_id = "value-item-id-***";

try {
    /**
     * GET /deep-context/{itemId}
     * 
     * @var \Kronup\Model\ValueItemExpanded $response
     */
    $response = $sdk
        ->api()
        ->deepContext()
        ->read($arg_item_id);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->deepContext()->read(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->deepContext()->read(): %s\n", 
        $exc->getMessage()
    );
}