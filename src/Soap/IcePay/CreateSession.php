<?php

namespace Icepay\Api\Soap\IcePay;

/**
 * Class representing CreateSession
 *
 * @see connect.icepay.com#CreateSession
 */
class CreateSession
{

    /**
     * @var string|null
     */
    protected $Timestamp = null;

    /**
     * @var string|null
     */
    protected $Username = null;

    /**
     * @var string|null
     */
    protected $UserAgent = null;

    /**
     * @var string|null
     */
    protected $Checksum = null;

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

    /**
     * Gets the Username.
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * Sets the Username.
     *
     * @param string|null $Username
     * @return $this
     */
    public function setUsername($Username = null)
    {
        $this->Username = $Username;
        return $this;
    }

    /**
     * Gets the UserAgent.
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->UserAgent;
    }

    /**
     * Sets the UserAgent.
     *
     * @param string|null $UserAgent
     * @return $this
     */
    public function setUserAgent($UserAgent = null)
    {
        $this->UserAgent = $UserAgent;
        return $this;
    }

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


}

