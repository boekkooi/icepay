<?php

require __DIR__ . '/common.php';

?>
<form method="get">
    <input name="f" type="hidden" value="<?php echo basename(__FILE__); ?>" />
    <div class="form-group">
        <label for="consumerID">Consumer ID</label>
        <input type="number" class="form-control" id="consumerID" name="consumerID" value="<?php echo isset($_GET['consumerID']) ? $_GET['consumerID'] : 123456; ?>">
    </div>
    <div class="form-group">
        <label for="orderID">Order ID</label>
        <input type="number" class="form-control" id="orderID" name="orderID" value="<?php echo isset($_GET['orderID']) ? $_GET['orderID'] : time(); ?>">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php

if (empty($_GET['orderID']) || empty($_GET['consumerID'])) {
    return;
}

$request = new \Icepay\Api\Soap\DataContract\AutomaticCheckoutRequestType(
    $_GET['consumerID'],
    $_GET['orderID'],
    1000,
    'EUR',
    'NL',
    'NL',
    $_SERVER['REMOTE_ADDR'],
    'CREDITCARD',
    'CCAUTOCHECKOUT'
);
$request
    ->setReference("My Sample Website")
    ->setDescription("My Sample Payment");

responseWrapper($request, function($request) use ($client) {
    return $client->requestRecurringPayment($request);
});
