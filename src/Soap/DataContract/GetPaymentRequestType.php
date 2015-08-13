<?php

namespace Icepay\Api\Soap\DataContract;

use Icepay\Api\Assert;

/**
 * Class representing GetPaymentRequest
 * 
 * @see http://schemas.datacontract.org/2004/07/APIService#GetPaymentRequest
 */
final class GetPaymentRequestType extends BaseTypeType
{
    /**
     * @var int|null
     */
    protected $PaymentID;

    /**
     * GetPaymentRequestType constructor.
     *
     * @param int $paymentID
     */
    public function __construct($paymentID)
    {
        Assert::that($paymentID, null, 'paymentID')->integer();

        $this->PaymentID = $paymentID;
    }

    /**
     * Gets the PaymentID.
     *
     * @return int
     */
    public function getPaymentID()
    {
        return $this->PaymentID;
    }

    /**
     * @inheritdoc
     */
    public function getChecksumData()
    {
        return [
            $this->getPaymentID()
        ];
    }
}

