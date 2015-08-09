<?php

namespace Icepay\Api;

use Icepay\Api\DataContract\RequestAPCaptureResponseType;
use Icepay\Api\IcePay\CaptureFull;
use Icepay\Api\IcePay\CapturePartial;

class APCaptureClient extends SoapClient
{

    private static $classMap = array(
        'CaptureFull' => CaptureFull::class,
        'CapturePartial' => CapturePartial::class,
        'RequestAPCaptureResponse' => RequestAPCaptureResponseType::class,
    );

    public function __construct(array $options = array(), $wsdl = 'https://connect.icepay.com/webservice/APCapture.svc?wsdl')
    {
        if (empty($options['classmap'])) {
            $options['classmap'] = self::$classMap;
        } else {
            foreach (self::$classMap as $soapType => $phpType) {
                if (!isset($options['classmap'][$soapType])) {
                    $options['classmap'][$soapType] = $phpType;
                }
            }
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param CaptureFull $parameters
     * @return RequestAPCaptureResponseType
     */
    public function CaptureFull(CaptureFull $parameters)
    {
        $response = $this->__soapCall('CaptureFull', array($parameters));

        return $this->checkResponse($response, 'CaptureFullResult');
    }

    /**
     * @param CapturePartial $parameters
     * @return \stdClass
     */
    public function CapturePartial(CapturePartial $parameters)
    {
        return $this->__soapCall('CapturePartial', array($parameters));
    }
}

