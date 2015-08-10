<?php
require __DIR__ . '/common.php';

$currency = !empty($_GET['currency']) ? $_GET['currency'] : null;
$country = !empty($_GET['country']) ? $_GET['country'] : null;
$language = !empty($_GET['language']) ? $_GET['language'] : null;
$amount = !empty($_GET['amount']) ? floatval($_GET['amount']) : null;

?>
<form method="get">
    <input name="f" type="hidden" value="<?php echo basename(__FILE__); ?>" />
    <div class="form-group">
        <label for="currency">Currency code</label>
        <input type="text" class="form-control" id="currency" name="currency" value="<?php echo $currency; ?>">
    </div>
    <div class="form-group">
        <label for="country">Country code</label>
        <input type="text" class="form-control" id="country" name="country" value="<?php echo $country; ?>">
    </div>
    <div class="form-group">
        <label for="language">Language code</label>
        <input type="text" class="form-control" id="language" name="language" value="<?php echo $language; ?>">
    </div>
    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="number" class="form-control" id="amount" name="amount" value="<?php echo $amount; ?>">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php

$reducer = (new \Icepay\Api\PaymentMethod\Reducer());
if ($currency !== null) {
    $reducer->currency($currency);
}
if ($country !== null) {
    $reducer->country($country);
}
if ($language !== null) {
    $reducer->language($language);
}
if ($amount !== null) {
    $reducer->amount($amount);
}

responseWrapper($reducer, function(\Icepay\Api\PaymentMethod\Reducer $reducer) use ($client) {
    return $reducer->reduce(
        $client->getPaymentMethods()
    );
});
