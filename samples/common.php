<?php

$loader = @include __DIR__.'/../vendor/autoload.php';
if (!$loader) {
    throw new \InvalidArgumentException(<<<'EOT'
You must set up the project dependencies, run the following commands:
<pre>
wget http://getcomposer.org/composer.phar
php composer.phar install
</pre>
EOT
    );
}

$merchantId = null;
$secretCode = null;

if ($merchantId === null || $secretCode === null) {
    throw new \InvalidArgumentException(sprintf(
        'You must set the <strong>$merchantId</strong> and <strong>$secretCode</strong> in <strong>%s</strong>',
        __FILE__
    ));
}

$client = new \Icepay\Api\IcePay($merchantId, $secretCode);

/**
 * A helper function to catch exception and errors
 *
 * @param $request
 * @param Closure $closure
 */
function responseWrapper($request, \Closure $closure) {
    $error = $response = null;

    try {
        $response = $closure($request);
    } catch (\Icepay\Api\Exception\BadResponseException $e) {
        $error = $e->getMessage();
        $response = $e->getResponseObject();
    } catch(\Icepay\Api\Exception\SoapFaultException $e) {
        $error = $e->getMessage();
        $response = $e->getPrevious();
    } catch (Exception $e){
        $error = $e->getMessage();
    }

    displayInfo($response, $request, $error);
}

/**
 * A helper function to display information about a client call etc.
 *
 * @param mixed $response
 * @param mixed|null $request
 * @param string|null $error
 */
function displayInfo($response, $request = null, $error = null) {
    if ($error !== null) {
        printf('<div class="alert alert-danger" role="alert">%s</div>', $error);
    }

    echo '<h2>Response</h2>';
    echo '<pre>';
    print_r($response);
    echo '</pre>';

    if ($request !== null) {
        echo '<h2>Request</h2>';
        echo '<pre>';
        print_r($request);
        echo '</pre>';
    }
}
