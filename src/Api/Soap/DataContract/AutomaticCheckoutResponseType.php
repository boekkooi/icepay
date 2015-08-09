<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing AutomaticCheckoutResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#AutomaticCheckoutResponse
 */
class AutomaticCheckoutResponseType extends BaseTypeType
{

    /**
     * @var string|null
     */
    protected $ErrorDescription = null;

    /**
     * @var int|null
     */
    protected $PaymentID = null;

    /**
     * @var bool|null
     */
    protected $Success = null;

    /**
     * Gets the ErrorDescription.
     *
     * @return string|null
     */
    public function getErrorDescription()
    {
        return $this->ErrorDescription;
    }

    /**
     * Sets the ErrorDescription.
     *
     * @param string|null $ErrorDescription
     * @return $this
     */
    public function setErrorDescription($ErrorDescription = null)
    {
        $this->ErrorDescription = $ErrorDescription;
        return $this;
    }

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
     * Gets the Success.
     *
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * Sets the Success.
     *
     * @param bool|null $Success
     * @return $this
     */
    public function setSuccess($Success = null)
    {
        $this->Success = $Success;
        return $this;
    }

    /**
     * @inheritDoc
     */
    protected function getChecksumData()
    {
        return [
            $this->getErrorDescription(),
            $this->getPaymentID(),
            $this->getSuccess()
        ];
    }
}

