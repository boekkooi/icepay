<?php

require __DIR__ . '/common.php';

$resolver = new \Icepay\Api\Postback\Resolver($merchantId, $secretCode);
$result = $resolver->resolveFromPost();

if (is_bool($result)) {
    echo '<strong>Just a version check</strong>';
    return;
}

print_r($result);
