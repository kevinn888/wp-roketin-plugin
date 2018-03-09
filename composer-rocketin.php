<?php // Root namespace for now. See Issue #85

use WC_API_Client;
use WC_API_Client_Exception;

$options = array(
    'debug'           => true,
    'return_as_array' => false,
    'validate_url'    => false,
    'timeout'         => 30,
    'ssl_verify'      => false,
);

try {
    $client = new WC_API_Client(
        'http://localhost/wordpress',
        'ck_80e204d74f7f13f63ccabea40d2d92453bffb495',
        'cs_c3ca200132cd314a79859cdcc02ee3036117c7f0',
        $options
    );

    // index
    //print_r($client->index->get());

    // For other endpoints, see example.php

} catch (WC_API_Client_Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    echo $e->getCode() . PHP_EOL;

    if ($e instanceof WC_API_Client_HTTP_Exception) {
        print_r($e->get_request());
        print_r($e->get_response());
    }
}
