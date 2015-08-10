<?php
require __DIR__ . '/common.php';

responseWrapper(null, function() use ($client) {
    return $client->getPaymentMethods();
});
