<?php

// Resolve sample body if any
$body = '<h1 class="text-center">&leftarrow; Please select a sample.</h1>';
if (isset($_GET['f'])) {
    $bodyPath = realpath(__DIR__ . '/' . $_GET['f'] . '.php');
    if (file_exists($bodyPath) && substr($bodyPath, 0, strlen(__DIR__)) === __DIR__) {
        try {
            ob_start();
            require $bodyPath;
            $body = ob_get_clean();
        } catch (\InvalidArgumentException $e) {
            $body = sprintf('<div class="alert alert-danger" role="alert">%s</div>', $e->getMessage());
        }
    }
}

?>
<html>
<head>
    <title>IcePay Samples - Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        body {
            margin: 15px 0;
        }
    </style>
</head>
<body class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Payment</h3>
                </div>
                <div class="list-group">
                    <a class="list-group-item" href="?f=payment_init_basic">initializeBasicPayment</a>
                    <a class="list-group-item" href="?f=payment_init">initializePayment</a>
                    <a class="list-group-item" href="?f=payment_recurring_start">initializeRecurringPayment</a>
                    <a class="list-group-item" href="?f=payment_recurring_checkout">requestRecurringPayment</a>
                    <a class="list-group-item" href="?f=payment_get">getPayment</a>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Payment methods</h3>
                </div>
                <div class="list-group">
                    <a class="list-group-item" href="?f=paymentmethods_get">getPaymentMethods</a>
                    <a class="list-group-item" href="?f=paymentmethods_filter">reducePaymentMethods</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-9">
            <?php
            echo $body;
            ?>
        </div>
    </div>
</body>
</html>
