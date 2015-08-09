<?php

namespace Icepay\Api\IcePay;

/**
 * Class representing CreateSessionResponse
 *
 * @see connect.icepay.com#CreateSessionResponse
 */
class CreateSessionResponse
{

    /**
     * @var \Icepay\Api\DataContract\CreateSessionResponseType|null
     */
    protected $CreateSessionResult = null;

    /**
     * Gets the CreateSessionResult.
     *
     * @return \Icepay\Api\DataContract\CreateSessionResponseType|null
     */
    public function getCreateSessionResult()
    {
        return $this->CreateSessionResult;
    }

    /**
     * Sets the CreateSessionResult.
     *
     * @param \Icepay\Api\DataContract\CreateSessionResponseType|null $CreateSessionResult
     * @return $this
     */
    public function setCreateSessionResult(\Icepay\Api\DataContract\CreateSessionResponseType $CreateSessionResult = null)
    {
        $this->CreateSessionResult = $CreateSessionResult;
        return $this;
    }


}

