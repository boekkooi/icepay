<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing GetPaymentRequest
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#GetPaymentRequest
 */
class GetPaymentRequestType extends BaseTypeType
{

    /**
     * @var int|null
     */
    protected $PaymentID = null;

    /**
     * Gets the PaymentID.
     *
     * @return int|null
     */
    public function getPaymentID()
    {
        return $this->PaymentID;
    }

    /**
     * Sets the PaymentID.
     *
     * @param int|null $PaymentID
     * @return $this
     */
    public function setPaymentID($PaymentID = null)
    {
        $this->PaymentID = $PaymentID;
        return $this;
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

