<?php
/**
 * Copyright (c) 2022-2023 kronup.io
 * 
 * @link    https://php.kronup.io/Api/ExperiencesApi/#evaluateself
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

// Notion ID
$arg_notion_id = "notion-id-***";

// Grade between 1 and 10
$arg_grade = "5";

try {
    /**
     * PUT /xp/notions/{notionId}/grade/{grade}
     * 
     * @var \Kronup\Model\Experience $response
     */
    $response = $sdk
        ->api()
        ->experiences()
        ->evaluateSelf($arg_notion_id, $arg_grade);

    var_export($response);
} catch (\Kronup\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->experiences()->evaluateSelf(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->experiences()->evaluateSelf(): %s\n", 
        $exc->getMessage()
    );
}