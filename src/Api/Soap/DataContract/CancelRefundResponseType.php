<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing CancelRefundResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#CancelRefundResponse
 */
class CancelRefundResponseType
{

    /**
     * @var string|null
     */
    protected $Checksum = null;

    /**
     * @var int|null
     */
    protected $MerchantID = null;

    /**
     * @var bool|null
     */
    protected $Success = null;

    /**
     * @var string|null
     */
    protected $Timestamp = null;

    /**
     * Gets the Checksum.
     *
     * @return string|null
     */
    public function getChecksum()
    {
        return $this->Checksum;
    }

    /**
     * Sets the Checksum.
     *
     * @param string|null $Checksum
     * @return $this
     */
    public function setChecksum($Checksum = null)
    {
        $this->Checksum = $Checksum;
        return $this;
    }

    /**
     * Gets the MerchantID.
     *
     * @return int|null
     */
    public function getMerchantID()
    {
        return $this->MerchantID;
    }

    /**
     * Sets the MerchantID.
     *
     * @param int|null $MerchantID
     * @return $this
     */
    public function setMerchantID($MerchantID = null)
    {
        $this->MerchantID = $MerchantID;
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
     * Gets the Timestamp.
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets the Timestamp.
     *
     * @param string|null $Timestamp
     * @return $this
     */
    public function setTimestamp($Timestamp = null)
    {
        $this->Timestamp = $Timestamp;
        return $this;
    }


}

