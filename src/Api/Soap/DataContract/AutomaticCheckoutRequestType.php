<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing AutomaticCheckoutRequest
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#AutomaticCheckoutRequest
 * TODO what are cTimeStamp, checksuum and merchnatID for?
 */
class AutomaticCheckoutRequestType extends CheckoutRequestType
{

    /**
     * @var string|null
     */
    protected $CTimeStamp = null;

    /**
     * @var string|null
     */
    protected $Checksuum = null;

    /**
     * @var string|null
     */
    protected $ConsumerID = null;

    /**
     * @var int|null
     */
    protected $MerchnatID = null;

    /**
     * @inheritdoc
     * @param string $consumerID
     */
    public function __construct($consumerID, $orderId, $amount, $currency, $country, $language, $endUserIP, $paymentMethod = null, $paymentIssuer = null)
    {
        parent::__construct($orderId, $amount, $currency, $country, $language, $endUserIP, $paymentMethod, $paymentIssuer);

        $this->setConsumerID($consumerID);
    }


    /**
     * Gets the CTimeStamp.
     *
     * @return string|null
     */
    public function getCTimeStamp()
    {
        return $this->CTimeStamp;
    }

    /**
     * Sets the CTimeStamp.
     *
     * @param string|null $CTimeStamp
     * @return $this
     */
    public function setCTimeStamp($CTimeStamp = null)
    {
        $this->CTimeStamp = $CTimeStamp;
        return $this;
    }

    /**
     * Gets the Checksuum.
     *
     * @return string|null
     */
    public function getChecksuum()
    {
        return $this->Checksuum;
    }

    /**
     * Sets the Checksuum.
     *
     * @param string|null $Checksuum
     * @return $this
     */
    public function setChecksuum($Checksuum = null)
    {
        $this->Checksuum = $Checksuum;
        return $this;
    }

    /**
     * Gets the ConsumerID.
     *
     * @return string|null
     */
    public function getConsumerID()
    {
        return $this->ConsumerID;
    }

    /**
     * Sets the ConsumerID.
     *
     * @param string|null $ConsumerID
     * @return $this
     */
    public function setConsumerID($ConsumerID = null)
    {
        $this->ConsumerID = $ConsumerID;
        return $this;
    }

    /**
     * Gets the MerchnatID.
     *
     * @return int|null
     */
    public function getMerchnatID()
    {
        return $this->MerchnatID;
    }

    /**
     * Sets the MerchnatID.
     *
     * @param int|null $MerchnatID
     * @return $this
     */
    public function setMerchnatID($MerchnatID = null)
    {
        $this->MerchnatID = $MerchnatID;
        return $this;
    }


}

