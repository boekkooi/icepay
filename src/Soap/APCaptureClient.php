<?php

namespace Icepay\Api\Soap;

use Icepay\Api\Soap\DataContract\RequestAPCaptureResponseType;
use Icepay\Api\Soap\IcePay\CaptureFull;
use Icepay\Api\Soap\IcePay\CapturePartial;

class APCaptureClient extends SoapClient
{
    protected static $classMap = array(
        'CaptureFull' => CaptureFull::class,
        'CapturePartial' => CapturePartial::class,
        'RequestAPCaptureResponse' => RequestAPCaptureResponseType::class,
    );

    /**
     * @inheritdoc
     */
    public function __construct($secret, array $options = array(), $wsdl = 'https://connect.icepay.com/webservice/APCapture.svc?wsdl')
    {
        parent::__construct($secret, $wsdl, $options);
    }

    /**
     * @param CaptureFull $parameters
     * @return RequestAPCaptureResponseType
     */
    public function captureFull(CaptureFull $parameters)
    {
        $response = $this->__soapCall('CaptureFull', array($parameters));

        return $this->checkResponse($response, 'CaptureFullResult');
    }

    /**
     * @param CapturePartial $parameters
     * @return \stdClass
     */
    public function capturePartial(CapturePartial $parameters)
    {
        return $this->__soapCall('CapturePartial', array($parameters));
    }
}

