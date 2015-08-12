<?php
namespace Icepay\Api;

use Icepay\Api\Assert;

class IcePay
{
    /**
     * @var string
     */
    private $merchantId;
    /**
     * @var string
     */
    private $secretCode;
    /**
     * @var Http\IcePayClient|null
     */
    private $httpClient;
    /**
     * @var Soap\IcePayClient|null
     */
    private $soapClient;

    /**
     * @param string $merchantId
     * @param string $secretCode
     */
    public function __construct($merchantId, $secretCode)
    {
        Assert::lazy()
            ->that($merchantId, 'merchantId')->notEmpty()->string()
            ->that($secretCode, 'secretCode')->notEmpty()->string()
            ->verifyNow();

        $this->merchantId = $merchantId;
        $this->secretCode = $secretCode;
    }

    /**
     * Initialize a payment.
     *
     * @param Soap\DataContract\CheckoutRequestType $request
     * @return Soap\DataContract\CheckoutResponseType A url to redirect the customer to
     */
    public function initializePayment(Soap\DataContract\CheckoutRequestType $request)
    {
        $this->prepareRequest($request);

        return $this->getSoapClient()
            ->Checkout($request);
    }

    /**
     * Initialize a basic payment.
     *
     * @param Soap\DataContract\CheckoutRequestType $request
     * @return string A url to redirect the customer to
     */
    public function initializeBasicPayment(Soap\DataContract\CheckoutRequestType $request)
    {
        $this->prepareRequest($request);

        return $this->getHttpClient()
            ->Checkout($request);
    }

    /**
     * Initialize a recurring/stored payment.
     *
     * @param Soap\DataContract\VaultCheckoutRequestType $request
     * @return Soap\DataContract\CheckoutResponseType
     */
    public function initializeRecurringPayment(Soap\DataContract\VaultCheckoutRequestType $request)
    {
        $this->prepareRequest($request);

        return $this->getSoapClient()->VaultCheckout($request);
    }

    /**
     * Initialize a recurring/stored payment.
     *
     * @param Soap\DataContract\AutomaticCheckoutRequestType $request
     * @return Soap\DataContract\AutomaticCheckoutResponseType
     */
    public function requestRecurringPayment(Soap\DataContract\AutomaticCheckoutRequestType $request)
    {
        $this->prepareRequest($request);

        return $this->getSoapClient()->AutomaticCheckout($request);
    }

    /**
     * Retrieve payment information
     *
     * @param int $paymentId
     * @return Soap\DataContract\GetPaymentResponseType
     */
    public function getPayment($paymentId)
    {
        $request = new Soap\DataContract\GetPaymentRequestType($paymentId);
        $this->prepareRequest($request);

        return $this->getSoapClient()
            ->GetPayment($request);
    }

    /**
     * Retrieve all available payment methods
     *
     * @return Soap\DataContract\Responses\PaymentMethodType[]
     */
    public function getPaymentMethods()
    {
        $request = new Soap\DataContract\GetMyPaymentMethodRequestType();
        $this->prepareRequest($request);

        return $this->getSoapClient()
            ->GetMyPaymentMethods($request)
            ->getPaymentMethods();
    }

    /**
     * @return Http\IcePayClient
     */
    protected function getHttpClient()
    {
        if ($this->httpClient === null) {
            $this->httpClient = new Http\IcePayClient($this->secretCode);
        }
        return $this->httpClient;
    }

    /**
     * @return Soap\IcePayClient
     */
    protected function getSoapClient()
    {
        if ($this->soapClient === null) {
            $this->soapClient = new Soap\IcePayClient($this->secretCode);
        }
        return $this->soapClient;
    }

    /**
     * Set the merchantId and generate the checksum for a request object.
     *
     * @param object $request
     */
    protected function prepareRequest($request)
    {
        if ($request instanceof Soap\DataContract\BaseTypeType) {
            $request
                ->setMerchantID($this->merchantId)
                ->generateChecksum($this->secretCode);
        }
    }
}
