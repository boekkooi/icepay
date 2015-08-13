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
     * Gets the PaymentID.
     *
     * @return int|null
     */
    public function getPaymentID()
    {
        return $this->PaymentID;
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
     * @inheritDoc
     */
    protected function getChecksumData()
    {
        return [
            $this->getPaymentID(),
            $this->getSuccess(),
            $this->getErrorDescription(),
        ];
    }

    /**
     * @inheritDoc
     */
    protected function resolveChecksum(array $data, $isAutoCheckout = false)
    {
        return parent::resolveChecksum($data, true);
    }
}
