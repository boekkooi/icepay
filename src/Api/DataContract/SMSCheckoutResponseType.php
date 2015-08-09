<?php

namespace Icepay\Api\DataContract;

/**
 * Class representing SMSCheckoutResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#SMSCheckoutResponse
 */
class SMSCheckoutResponseType extends CheckoutResponseType
{

    /**
     * @var string|null
     */
    protected $ActivationCode = null;

    /**
     * @var string|null
     */
    protected $Disclaimer = null;

    /**
     * @var string|null
     */
    protected $Keyword = null;

    /**
     * @var string|null
     */
    protected $PremiumNumber = null;

    /**
     * Gets the ActivationCode.
     *
     * @return string|null
     */
    public function getActivationCode()
    {
        return $this->ActivationCode;
    }

    /**
     * Sets the ActivationCode.
     *
     * @param string|null $ActivationCode
     * @return $this
     */
    public function setActivationCode($ActivationCode = null)
    {
        $this->ActivationCode = $ActivationCode;
        return $this;
    }

    /**
     * Gets the Disclaimer.
     *
     * @return string|null
     */
    public function getDisclaimer()
    {
        return $this->Disclaimer;
    }

    /**
     * Sets the Disclaimer.
     *
     * @param string|null $Disclaimer
     * @return $this
     */
    public function setDisclaimer($Disclaimer = null)
    {
        $this->Disclaimer = $Disclaimer;
        return $this;
    }

    /**
     * Gets the Keyword.
     *
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }

    /**
     * Sets the Keyword.
     *
     * @param string|null $Keyword
     * @return $this
     */
    public function setKeyword($Keyword = null)
    {
        $this->Keyword = $Keyword;
        return $this;
    }

    /**
     * Gets the PremiumNumber.
     *
     * @return string|null
     */
    public function getPremiumNumber()
    {
        return $this->PremiumNumber;
    }

    /**
     * Sets the PremiumNumber.
     *
     * @param string|null $PremiumNumber
     * @return $this
     */
    public function setPremiumNumber($PremiumNumber = null)
    {
        $this->PremiumNumber = $PremiumNumber;
        return $this;
    }


}

