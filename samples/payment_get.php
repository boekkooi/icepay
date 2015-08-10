<?php

require __DIR__ . '/common.php';

?>
<form method="get">
    <input name="f" type="hidden" value="<?php echo basename(__FILE__); ?>" />
    <div class="form-group">
        <label for="paymentId">Payment ID</label>
        <input type="number" class="form-control" id="paymentId" name="paymentId">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php

if (!isset($_GET['paymentId']) || (string)intval($_GET['paymentId']) !== $_GET['paymentId']) {
    return;
}

$paymentId = intval($_GET['paymentId']);

responseWrapper($paymentId, function($paymentId) use ($client) {
    return $client->getPayment($paymentId);
});
