<?php
namespace Icepay\Api\Postback;

use Icepay\Api\Assert;

class Order
{
    const STATE_OPEN = "OPEN";
    const STATE_AUTHORIZED = "AUTHORIZED";
    const STATE_ERROR = "ERR";
    const STATE_SUCCESS = "OK";
    const STATE_REFUND = "REFUND";
    const STATE_CHARGE_BACK = "CBACK";

    /**
     * @var string
     */
    private $paymentMethod;
    /**
     * @var string
     */
    private $orderID;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $paymentID;
    /**
     * @var null|string
     */
    private $statusCode;
    /**
     * @var null|string
     */
    private $transactionID;
    /**
     * @var null|string
     */
    private $reference;
    /**
     * @var null|string
     */
    private $amount;
    /**
     * @var null|string
     */
    private $currency;
    /**
     * @var null|string
     */
    private $duration;
    /**
     * @var null|string
     */
    private $consumerName;
    /**
     * @var null|string
     */
    private $consumerAccountNumber;
    /**
     * @var null|string
     */
    private $consumerAddress;
    /**
     * @var null|string
     */
    private $consumerHouseNumber;
    /**
     * @var null|string
     */
    private $consumerCity;
    /**
     * @var null|string
     */
    private $consumerCountry;
    /**
     * @var null|string
     */
    private $consumerEmail;
    /**
     * @var null|string
     */
    private $consumerPhoneNumber;
    /**
     * @var null|string
     */
    private $consumerIPAddress;

    /**
     * @param string $paymentMethod
     * @param string $orderID
     * @param string $status
     * @param string $paymentID
     * @param string|null $statusCode
     * @param string|null $transactionID
     * @param string|null $reference
     * @param string|null $amount
     * @param string|null $currency
     * @param string|null $duration
     * @param string|null $consumerName
     * @param string|null $consumerAccountNumber
     * @param string|null $consumerAddress
     * @param string|null $consumerHouseNumber
     * @param string|null $consumerCity
     * @param string|null $consumerCountry
     * @param string|null $consumerEmail
     * @param string|null $consumerPhoneNumber
     * @param string|null $consumerIPAddress
     */
    public function __construct(
        $paymentMethod, $orderID, $status, $paymentID, $statusCode = null, $transactionID = null, $reference = null, $amount = null,
        $currency = null, $duration = null, $consumerName = null, $consumerAccountNumber = null, $consumerAddress = null,
        $consumerHouseNumber = null, $consumerCity = null, $consumerCountry = null, $consumerEmail = null, $consumerPhoneNumber = null,
        $consumerIPAddress = null)
    {
        Assert::lazy()
            ->that($paymentMethod, 'paymentMethod')->notEmpty()->maxLength(20)
            ->that($orderID, 'orderID')->notEmpty()->maxLength(10)
            ->that($status, 'status')->inArray([
                self::STATE_OPEN,
                self::STATE_AUTHORIZED,
                self::STATE_ERROR,
                self::STATE_SUCCESS,
                self::STATE_REFUND,
                self::STATE_CHARGE_BACK,
            ])
            ->that($paymentID, 'paymentID')->numeric()
            ->that($statusCode, 'statusCode')->nullOr()->string()->maxLength(100)
            ->that($transactionID, 'transactionID')->nullOr()->string()->maxLength(50)
            ->that($reference, 'reference')->nullOr()->string()->maxLength(50)
            ->that($amount, 'amount')->nullOr()->numeric()
            ->that($currency, 'currency')->nullOr()->string()->length(3)
            ->that($duration, 'duration')->nullOr()->numeric()
            ->that($consumerName, 'consumerName')->nullOr()->string()->maxLength(100)
            ->that($consumerAccountNumber, 'consumerAccountNumber')->nullOr()->string()->maxLength(100)
            ->that($consumerAddress, 'consumerAddress')->nullOr()->string()->maxLength(100)
            ->that($consumerHouseNumber, 'consumerHouseNumber')->nullOr()->string()->maxLength(10)
            ->that($consumerCity, 'consumerCity')->nullOr()->string()->maxLength(100)
            ->that($consumerCountry, 'consumerCountry')->nullOr()->string()->maxLength(100)
            ->that($consumerEmail, 'consumerEmail')->nullOr()->string()->maxLength(200)
            ->that($consumerPhoneNumber, 'consumerPhoneNumber')->nullOr()->string()->maxLength(50)
            ->that($consumerIPAddress, 'consumerIPAddress')->nullOr()->ip()
            ->verifyNow();

        $this->paymentMethod = $paymentMethod;
        $this->orderID = $orderID;
        $this->status = $status;
        $this->paymentID = $paymentID;
        $this->statusCode = $statusCode;
        $this->transactionID = $transactionID;
        $this->reference = $reference;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->duration = $duration;
        $this->consumerName = $consumerName;
        $this->consumerAccountNumber = $consumerAccountNumber;
        $this->consumerAddress = $consumerAddress;
        $this->consumerHouseNumber = $consumerHouseNumber;
        $this->consumerCity = $consumerCity;
        $this->consumerCountry = $consumerCountry;
        $this->consumerEmail = $consumerEmail;
        $this->consumerPhoneNumber = $consumerPhoneNumber;
        $this->consumerIPAddress = $consumerIPAddress;
    }

    /**
     * The used payment method.
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Order ID as originally provided
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Payment status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The unique numeric value that identifies this payment within IcePay.
     *
     * @return string
     */
    public function getPaymentID()
    {
        return $this->paymentID;
    }

    /**
     * A short description of the status.
     * We will use the codes as received from the payment method provider.
     *
     * @return null|string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * This value is created by the payment method provider / bank and showed on the users bank statement
     *
     * @return null|string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Get the originally provided reference
     *
     * @return null|string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Get the final paid amount value in whole cents.
     *
     * @return null|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get the currency in which the amount is represented.
     *
     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Represents the call duration (if available), in whole seconds, in phone payment methods.
     *
     * @return null|string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Name of the bank account owner
     *
     * @return null|string
     */
    public function getConsumerName()
    {
        return $this->consumerName;
    }

    /**
     * Last 4 digits of account number from which payment was done, if received from the bank
     *
     * @return null|string
     */
    public function getConsumerAccountNumber()
    {
        return $this->consumerAccountNumber;
    }

    /**
     * Consumer address/street as filled in payment form
     *
     * @return null|string
     */
    public function getConsumerAddress()
    {
        return $this->consumerAddress;
    }

    /**
     * Consumer house number as filled in payment form
     *
     * @return null|string
     */
    public function getConsumerHouseNumber()
    {
        return $this->consumerHouseNumber;
    }

    /**
     * Consumer city as filled in payment form
     *
     * @return null|string
     */
    public function getConsumerCity()
    {
        return $this->consumerCity;
    }

    /**
     * Consumer country as filled in payment form
     *
     * @return null|string
     */
    public function getConsumerCountry()
    {
        return $this->consumerCountry;
    }

    /**
     * Consumer email value as filled in payment form
     *
     * @return null|string
     */
    public function getConsumerEmail()
    {
        return $this->consumerEmail;
    }

    /**
     * If available phone number from which payment was made or used in payment form.
     * In international format as: 31703242323. If CID is hidden you will get {PRIVE}
     *
     * @return null|string
     */
    public function getConsumerPhoneNumber()
    {
        return $this->consumerPhoneNumber;
    }

    /**
     * IP address from which payment form was filled.
     *
     * @return null|string
     */
    public function getConsumerIPAddress()
    {
        return $this->consumerIPAddress;
    }

    /**
     * Generate a checksum for a order.
     *
     * @param string $merchantId
     * @param string $secretCode
     * @param Order $order
     * @return string
     */
    public static function generateChecksum($merchantId, $secretCode, Order $order)
    {
        return sha1(implode('|', [
            $secretCode,
            $merchantId,
            $order->getStatus(),
            $order->getStatusCode(),
            $order->getOrderID(),
            $order->getPaymentID(),
            $order->getReference(),
            $order->getTransactionID(),
            $order->getAmount(),
            $order->getCurrency(),
            $order->getDuration(),
            $order->getConsumerIPAddress()
        ]));
    }

    /**
     * Check that the given status is a valid previous state and that you can use this order to go to it's status
     *
     * @param string $previousStatus
     * @return boolean
     */
    public function isValidNextStatus($previousStatus)
    {
        switch ($this->status) {
            case self::STATE_SUCCESS:
                return (
                    $previousStatus === self::STATE_ERROR ||
                    $previousStatus === self::STATE_AUTHORIZED ||
                    $previousStatus === self::STATE_OPEN
                );
            case self::STATE_OPEN:
            case self::STATE_AUTHORIZED:
                return $previousStatus == self::STATE_OPEN;
            case self::STATE_ERROR:
                return (
                    $previousStatus == self::STATE_OPEN ||
                    $previousStatus == self::STATE_AUTHORIZED
                );
            case self::STATE_CHARGE_BACK:
            case self::STATE_REFUND:
                return $previousStatus == self::STATE_SUCCESS;
        };

        return false;
    }
}
