<?php
require __DIR__ . '/common.php';

$request = new \Icepay\Api\Soap\DataContract\CheckoutRequestType(
    time(),
    1000,
    'EUR',
    'NL',
    'NL',
    $_SERVER['REMOTE_ADDR'],
    'IDEAL',
    'ING'
);
$request
    ->setReference("My Sample Website")
    ->setDescription("My Sample Payment");

responseWrapper($request, function($request) use ($client) {
    return $client->initializePayment($request);
});
