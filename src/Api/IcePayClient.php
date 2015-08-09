<?php
namespace Icepay\Api;

use Icepay\Api\DataContract\AutomaticCheckoutRequestType;
use Icepay\Api\DataContract\AutomaticCheckoutResponseType;
use Icepay\Api\DataContract\BaseTypeType;
use Icepay\Api\DataContract\CheckoutExtendedRequestType;
use Icepay\Api\DataContract\CheckoutRequestType;
use Icepay\Api\DataContract\CheckoutResponseType;
use Icepay\Api\DataContract\CheckoutWithPINRequestType;
use Icepay\Api\DataContract\GetMyPaymentMethodResponseType;
use Icepay\Api\DataContract\GetPaymentRequestType;
use Icepay\Api\DataContract\GetPaymentResponseType;
use Icepay\Api\DataContract\GetPhoneStatusRequestType;
use Icepay\Api\DataContract\GetPhoneStatusResponseType;
use Icepay\Api\DataContract\GetPremiumRateNumbersResponseType;
use Icepay\Api\DataContract\PhoneCheckoutResponseType;
use Icepay\Api\DataContract\PhoneDirectCheckoutResponseType;
use Icepay\Api\DataContract\SMSCheckoutResponseType;
use Icepay\Api\DataContract\ValidatePhoneCodeRequestType;
use Icepay\Api\DataContract\ValidatePhoneCodeResponseType;
use Icepay\Api\DataContract\ValidateSmsCodeRequestType;
use Icepay\Api\DataContract\ValidateSmsCodeResponseType;
use Icepay\Api\DataContract\VaultCheckoutRequestType;

class IcePayClient extends SoapClient
{
    private static $classMap = array(
        'CheckoutRequest' => CheckoutRequestType::class,
        'CheckoutResponse' => CheckoutResponseType::class,
        'VaultCheckoutRequest' => VaultCheckoutRequestType::class,
        'AutomaticCheckoutRequest' => AutomaticCheckoutRequestType::class,
        'AutomaticCheckoutResponse' => AutomaticCheckoutResponseType::class,
        'CheckoutExtendedRequest' => CheckoutExtendedRequestType::class,
        'SMSCheckoutResponse' => SMSCheckoutResponseType::class,
        'PhoneCheckoutResponse' => PhoneCheckoutResponseType::class,
        'CheckoutWithPINRequest' => CheckoutWithPINRequestType::class,
        'PhoneDirectCheckoutResponse' => PhoneDirectCheckoutResponseType::class,
        'ValidatePhoneCodeRequest' => ValidatePhoneCodeRequestType::class,
        'ValidatePhoneCodeResponse' => ValidatePhoneCodeResponseType::class,
        'GetPhoneStatusRequest' => GetPhoneStatusRequestType::class,
        'GetPhoneStatusResponse' => GetPhoneStatusResponseType::class,
        'ValidateSmsCodeRequest' => ValidateSmsCodeRequestType::class,
        'ValidateSmsCodeResponse' => ValidateSmsCodeResponseType::class,
        'GetPaymentRequest' => GetPaymentRequestType::class,
        'GetPaymentResponse' => GetPaymentResponseType::class,
        'BaseType' => BaseTypeType::class,
        'GetPremiumRateNumbersResponse' => GetPremiumRateNumbersResponseType::class,
        'GetMyPaymentMethodResponse' => GetMyPaymentMethodResponseType::class,
        'PremiumRateNumberInformation' => \Icepay\Api\DataContract\PremiumRateNumberInformationType::class,
        'PaymentMethod' => \Icepay\Api\DataContract\Responses\PaymentMethodType::class,
        'Issuer' => \Icepay\Api\DataContract\Responses\IssuerType::class,
        'Country' => \Icepay\Api\DataContract\Responses\CountryType::class,
    );

    public function __construct(array $options = 'array', $wsdl = 'https://connect.icepay.com/webservice/icepay.svc?wsdl')
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
     * @param CheckoutRequestType $parameters
     * @return CheckoutResponseType
     */
    public function Checkout(CheckoutRequestType $parameters)
    {
        $response = $this->__soapCall(
            'Checkout',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'CheckoutResult');
    }

    /**
     * @param VaultCheckoutRequestType $parameters
     * @return CheckoutResponseType
     */
    public function VaultCheckout(VaultCheckoutRequestType $parameters)
    {
        $response = $this->__soapCall(
            'VaultCheckout',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'VaultCheckoutResult');
    }

    /**
     * @param AutomaticCheckoutRequestType $parameters
     * @return AutomaticCheckoutResponseType
     */
    public function AutomaticCheckout(AutomaticCheckoutRequestType $parameters)
    {
        $response = $this->__soapCall(
            'AutomaticCheckout',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'AutomaticCheckoutResult');
    }

    /**
     * @param CheckoutExtendedRequestType $parameters
     * @return CheckoutResponseType
     */
    public function CheckoutExtended(CheckoutExtendedRequestType $parameters)
    {
        $response = $this->__soapCall(
            'CheckoutExtended',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'CheckoutExtendedResult');
    }

    /**
     * @param CheckoutRequestType $parameters
     * @return SMSCheckoutResponseType
     */
    public function SMSCheckout(CheckoutRequestType $parameters)
    {
        $response = $this->__soapCall(
            'SMSCheckout',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'SMSCheckoutResult');
    }

    /**
     * @param CheckoutRequestType $parameters
     * @return PhoneCheckoutResponseType
     */
    public function PhoneCheckout(CheckoutRequestType $parameters)
    {
        $response = $this->__soapCall(
            'PhoneCheckout',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'PhoneCheckoutResult');
    }

    /**
     * @param CheckoutWithPINRequestType $parameters
     * @return PhoneDirectCheckoutResponseType
     */
    public function PhoneDirectCheckout(CheckoutWithPINRequestType $parameters)
    {
        $response = $this->__soapCall(
            'PhoneDirectCheckout',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'PhoneDirectCheckoutResult');
    }

    /**
     * @param ValidatePhoneCodeRequestType $parameters
     * @return ValidatePhoneCodeResponseType
     */
    public function ValidatePhoneCode(ValidatePhoneCodeRequestType $parameters)
    {
        $response = $this->__soapCall(
            'ValidatePhoneCode',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'ValidatePhoneCodeResult');
    }

    /**
     * TODO find docs
     *
     * @param GetPhoneStatusRequestType $parameters
     * @return GetPhoneStatusResponseType
     */
    public function GetPhoneStatus(GetPhoneStatusRequestType $parameters)
    {
        $response = $this->__soapCall(
            'GetPhoneStatus',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'GetPhoneStatusResult');
    }

    /**
     * @param ValidateSmsCodeRequestType $parameters
     * @return ValidateSmsCodeResponseType
     */
    public function ValidateSmsCode(ValidateSmsCodeRequestType $parameters)
    {
        $response = $this->__soapCall(
            'ValidateSmsCode',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'ValidateSmsCodeResult');
    }

    /**
     * @param GetPaymentRequestType $parameters
     * @return GetPaymentResponseType
     */
    public function GetPayment(GetPaymentRequestType $parameters)
    {
        $response = $this->__soapCall(
            'GetPayment',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'GetPaymentResult');
    }

    /**
     * @param BaseTypeType $parameters
     * @return GetPremiumRateNumbersResponseType
     */
    public function GetPremiumRateNumbers(BaseTypeType $parameters)
    {
        $response = $this->__soapCall(
            'GetPremiumRateNumbers',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'GetPremiumRateNumbersResult');
    }

    /**
     * @param BaseTypeType $parameters
     * @return GetMyPaymentMethodResponseType
     */
    public function GetMyPaymentMethods(BaseTypeType $parameters)
    {
        $response = $this->__soapCall(
            'GetMyPaymentMethods',
            array(
                (object)array('request' => $parameters)
            )
        );

        return $this->checkResponse($response, 'GetMyPaymentMethodsResult');
    }
}

