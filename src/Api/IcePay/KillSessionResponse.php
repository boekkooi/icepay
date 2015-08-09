<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing KillSessionResponse
 *
 * @see connect.icepay.com#KillSessionResponse
 */
class KillSessionResponse
{

    /**
     * @var \Icepay\Api\DataContract\KillSessionResponseType|null
     */
    protected $KillSessionResult = null;

    /**
     * Gets the KillSessionResult.
     *
     * @return \Icepay\Api\DataContract\KillSessionResponseType|null
     */
    public function getKillSessionResult()
    {
        return $this->KillSessionResult;
    }

    /**
     * Sets the KillSessionResult.
     *
     * @param \Icepay\Api\DataContract\KillSessionResponseType|null $KillSessionResult
     * @return $this
     */
    public function setKillSessionResult(\Icepay\Api\DataContract\KillSessionResponseType $KillSessionResult = null)
    {
        $this->KillSessionResult = $KillSessionResult;
        return $this;
    }


}

