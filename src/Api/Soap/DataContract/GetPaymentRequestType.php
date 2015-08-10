<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing GetPaymentRequest
<<<<<<< HEAD
 *
=======
 *
>>>>>>> e65c09b... GetPaymentRequestType set requested value for constructor
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
     * @param int $PaymentID
     */
    public function __construct($PaymentID)
    {
        $this->PaymentID = $PaymentID;
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

