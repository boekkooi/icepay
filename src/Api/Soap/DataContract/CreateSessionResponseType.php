<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing CreateSessionResponse
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#CreateSessionResponse
 */
class CreateSessionResponseType
{

    /**
     * @var string|null
     */
    protected $Checksum = null;

    /**
     * @var string|null
     */
    protected $Description = null;

    /**
     * @var string|null
     */
    protected $SessionID = null;

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
     * Gets the Description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets the Description.
     *
     * @param string|null $Description
     * @return $this
     */
    public function setDescription($Description = null)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * Gets the SessionID.
     *
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }

    /**
     * Sets the SessionID.
     *
     * @param string|null $SessionID
     * @return $this
     */
    public function setSessionID($SessionID = null)
    {
        $this->SessionID = $SessionID;
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

