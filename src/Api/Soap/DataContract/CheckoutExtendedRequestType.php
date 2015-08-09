<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing CheckoutExtendedRequest
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#CheckoutExtendedRequest
 */
class CheckoutExtendedRequestType extends CheckoutRequestType
{

    /**
     * @var string|null
     */
    protected $XML = null;

    /**
     * Gets the XML.
     *
     * @return string|null
     */
    public function getXML()
    {
        return $this->XML;
    }

    /**
     * Sets the XML.
     *
     * @param string|null $XML
     * @return $this
     */
    public function setXML($XML = null)
    {
        $this->XML = $XML;
        return $this;
    }


}

