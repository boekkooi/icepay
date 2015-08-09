<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing KillSession
 *
 * @see connect.icepay.com#KillSession
 */
class KillSession
{

    /**
     * @var string|null
     */
    protected $Timestamp = null;

    /**
     * @var string|null
     */
    protected $SessionID = null;

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

