<?php
/**
 * Copyright (c) 2022-2023 kronup.com
 * 
 * @link    https://kronup.github.io/kronup-php/Api/NotionsApi/#notioncreate
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

// Organization ID
$arg_x_org_id = "org-id-***";

$arg_request_notion_create = (new \Kronup\Model\RequestNotionCreate())
    
    // (optional) Notion
    ->setValue('electron.js');

try {

    /**
     * POST /notions
     * 
     * @var \Kronup\Model\Notion $response
     */
    $response = $sdk
        ->api()
        ->notions()
        ->notionCreate($arg_x_org_id, $arg_request_notion_create);

    var_dump($response);

} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->notions()->notionCreate(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->notions()->notionCreate(): %s\n", 
        $exc->getMessage()
    );
}