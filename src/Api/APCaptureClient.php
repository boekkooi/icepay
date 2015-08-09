<?php

namespace Icepay\Api;

use SoapClient;
use Icepay\Api\IcePay\CaptureFull;
use Icepay\Api\IcePay\CaptureFullResponse;
use Icepay\Api\IcePay\CapturePartial;
use Icepay\Api\IcePay\CapturePartialResponse;

class APCaptureClient extends SoapClient
{

    private static $classMap = array(
        'CaptureFull' => CaptureFull::class,
        'CaptureFullResponse' => CaptureFullResponse::class,
        'CapturePartial' => CapturePartial::class,
        'CapturePartialResponse' => CapturePartialResponse::class,
        'RequestAPCaptureResponse' => \Icepay\Api\DataContract\RequestAPCaptureResponseType::class,
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
     * @return CaptureFullResponse
     */
    public function CaptureFull(CaptureFull $parameters)
    {
        return $this->__soapCall('CaptureFull', array($parameters));
    }

    /**
     * @param CapturePartial $parameters
     * @return CapturePartialResponse
     */
    public function CapturePartial(CapturePartial $parameters)
    {
        return $this->__soapCall('CapturePartial', array($parameters));
    }


}

