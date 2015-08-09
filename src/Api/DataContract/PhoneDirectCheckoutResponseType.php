<?php

namespace Icepay\Api\DataContract;

/**
 * Class representing PhoneDirectCheckoutResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#PhoneDirectCheckoutResponse
 */
class PhoneDirectCheckoutResponseType extends PhoneCheckoutResponseType
{

    /**
     * @var string|null
     */
    protected $ErrorDescription = null;

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


}

