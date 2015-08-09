<?php
namespace Icepay\Api;

use Icepay\Api\DataContract\AutomaticCheckoutRequestType;
use Icepay\Api\DataContract\BaseTypeType;
use Icepay\Api\DataContract\CheckoutExtendedRequestType;
use Icepay\Api\DataContract\CheckoutRequestType;
use Icepay\Api\DataContract\CheckoutWithPINRequestType;
use Icepay\Api\DataContract\GetPaymentRequestType;
use Icepay\Api\DataContract\GetPhoneStatusRequestType;
use Icepay\Api\DataContract\ValidatePhoneCodeRequestType;
use Icepay\Api\DataContract\ValidateSmsCodeRequestType;
use Icepay\Api\DataContract\VaultCheckoutRequestType;
use Icepay\Api\IcePay\AutomaticCheckoutResponse;
use Icepay\Api\IcePay\CheckoutExtendedResponse;
use Icepay\Api\IcePay\CheckoutResponse;
use Icepay\Api\IcePay\GetMyPaymentMethodsResponse;
use Icepay\Api\IcePay\GetPaymentResponse;
use Icepay\Api\IcePay\GetPhoneStatusResponse;
use Icepay\Api\IcePay\GetPremiumRateNumbersResponse;
use Icepay\Api\IcePay\PhoneCheckoutResponse;
use Icepay\Api\IcePay\PhoneDirectCheckoutResponse;
use Icepay\Api\IcePay\SMSCheckoutResponse;
use Icepay\Api\IcePay\ValidatePhoneCodeResponse;
use Icepay\Api\IcePay\ValidateSmsCodeResponse;
use Icepay\Api\IcePay\VaultCheckoutResponse;
use SoapClient;

class IcePayClient extends SoapClient
{
    private static $classMap = array(
        'CheckoutResponse' => CheckoutResponse::class,
        'VaultCheckoutResponse' => VaultCheckoutResponse::class,
        'AutomaticCheckoutResponse' => AutomaticCheckoutResponse::class,
        'CheckoutExtendedResponse' => CheckoutExtendedResponse::class,
        'SMSCheckoutResponse' => SMSCheckoutResponse::class,
        'PhoneCheckoutResponse' => PhoneCheckoutResponse::class,
        'PhoneDirectCheckoutResponse' => PhoneDirectCheckoutResponse::class,
        'ValidatePhoneCodeResponse' => ValidatePhoneCodeResponse::class,
        'GetPhoneStatusResponse' => GetPhoneStatusResponse::class,
        'ValidateSmsCodeResponse' => ValidateSmsCodeResponse::class,
        'GetPaymentResponse' => GetPaymentResponse::class,
        'GetPremiumRateNumbersResponse' => GetPremiumRateNumbersResponse::class,
        'GetMyPaymentMethodsResponse' => GetMyPaymentMethodsResponse::class,
        'CheckoutRequest' => CheckoutRequestType::class,
        'http://schemas.datacontract.org/2004/07/APIService#CheckoutResponse' => \Icepay\Api\DataContract\CheckoutResponseType::class,
        'VaultCheckoutRequest' => VaultCheckoutRequestType::class,
        'AutomaticCheckoutRequest' => AutomaticCheckoutRequestType::class,
        'http://schemas.datacontract.org/2004/07/APIService#AutomaticCheckoutResponse' => \Icepay\Api\DataContract\AutomaticCheckoutResponseType::class,
        'CheckoutExtendedRequest' => CheckoutExtendedRequestType::class,
        'http://schemas.datacontract.org/2004/07/APIService#SMSCheckoutResponse' => \Icepay\Api\DataContract\SMSCheckoutResponseType::class,
        'http://schemas.datacontract.org/2004/07/APIService#PhoneCheckoutResponse' => \Icepay\Api\DataContract\PhoneCheckoutResponseType::class,
        'CheckoutWithPINRequest' => CheckoutWithPINRequestType::class,
        'http://schemas.datacontract.org/2004/07/APIService#PhoneDirectCheckoutResponse' => \Icepay\Api\DataContract\PhoneDirectCheckoutResponseType::class,
        'ValidatePhoneCodeRequest' => \Icepay\Api\DataContract\ValidatePhoneCodeRequestType::class,
        'http://schemas.datacontract.org/2004/07/APIService#ValidatePhoneCodeResponse' => \Icepay\Api\DataContract\ValidatePhoneCodeResponseType::class,
        'GetPhoneStatusRequest' => \Icepay\Api\DataContract\GetPhoneStatusRequestType::class,
        'http://schemas.datacontract.org/2004/07/APIService#GetPhoneStatusResponse' => \Icepay\Api\DataContract\GetPhoneStatusResponseType::class,
        'ValidateSmsCodeRequest' => \Icepay\Api\DataContract\ValidateSmsCodeRequestType::class,
        'http://schemas.datacontract.org/2004/07/APIService#ValidateSmsCodeResponse' => \Icepay\Api\DataContract\ValidateSmsCodeResponseType::class,
        'GetPaymentRequest' => \Icepay\Api\DataContract\GetPaymentRequestType::class,
        'http://schemas.datacontract.org/2004/07/APIService#GetPaymentResponse' => \Icepay\Api\DataContract\GetPaymentResponseType::class,
        'BaseType' => \Icepay\Api\DataContract\BaseTypeType::class,
        'http://schemas.datacontract.org/2004/07/APIService#GetPremiumRateNumbersResponse' => \Icepay\Api\DataContract\GetPremiumRateNumbersResponseType::class,
        'GetMyPaymentMethodResponse' => \Icepay\Api\DataContract\GetMyPaymentMethodResponseType::class,
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
     * @return CheckoutResponse
     */
    public function Checkout(CheckoutRequestType $parameters)
    {
        return $this->__soapCall(
            'Checkout',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * @param VaultCheckoutRequestType $parameters
     * @return VaultCheckoutResponse
     */
    public function VaultCheckout(VaultCheckoutRequestType $parameters)
    {
        return $this->__soapCall(
            'VaultCheckout',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * @param AutomaticCheckoutRequestType $parameters
     * @return AutomaticCheckoutResponse
     */
    public function AutomaticCheckout(AutomaticCheckoutRequestType $parameters)
    {
        return $this->__soapCall(
            'AutomaticCheckout',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * @param CheckoutExtendedRequestType $parameters
     * @return CheckoutExtendedResponse
     */
    public function CheckoutExtended(CheckoutExtendedRequestType $parameters)
    {
        return $this->__soapCall(
            'CheckoutExtended',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * @param CheckoutRequestType $parameters
     * @return SMSCheckoutResponse
     */
    public function SMSCheckout(CheckoutRequestType $parameters)
    {
        return $this->__soapCall(
            'SMSCheckout',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * @param CheckoutRequestType $parameters
     * @return PhoneCheckoutResponse
     */
    public function PhoneCheckout(CheckoutRequestType $parameters)
    {
        return $this->__soapCall(
            'PhoneCheckout',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * @param CheckoutWithPINRequestType $parameters
     * @return PhoneDirectCheckoutResponse
     */
    public function PhoneDirectCheckout(CheckoutWithPINRequestType $parameters)
    {
        return $this->__soapCall(
            'PhoneDirectCheckout',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * @param ValidatePhoneCodeRequestType $parameters
     * @return ValidatePhoneCodeResponse
     */
    public function ValidatePhoneCode(ValidatePhoneCodeRequestType $parameters)
    {
        return $this->__soapCall(
            'ValidatePhoneCode',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * TODO find docs
     *
     * @param GetPhoneStatusRequestType $parameters
     * @return GetPhoneStatusResponse
     */
    public function GetPhoneStatus(GetPhoneStatusRequestType $parameters)
    {
        return $this->__soapCall(
            'GetPhoneStatus',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * @param ValidateSmsCodeRequestType $parameters
     * @return ValidateSmsCodeResponse
     */
    public function ValidateSmsCode(ValidateSmsCodeRequestType $parameters)
    {
        return $this->__soapCall(
            'ValidateSmsCode',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * @param GetPaymentRequestType $parameters
     * @return GetPaymentResponse
     */
    public function GetPayment(GetPaymentRequestType $parameters)
    {
        return $this->__soapCall(
            'GetPayment',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * @param BaseTypeType $parameters
     * @return GetPremiumRateNumbersResponse
     */
    public function GetPremiumRateNumbers(BaseTypeType $parameters)
    {
        return $this->__soapCall(
            'GetPremiumRateNumbers',
            array(
                (object)array('request' => $parameters)
            )
        );
    }

    /**
     * @param BaseTypeType $parameters
     * @return GetMyPaymentMethodsResponse
     */
    public function GetMyPaymentMethods(BaseTypeType $parameters)
    {
        return $this->__soapCall(
            'GetMyPaymentMethods',
            array(
                (object)array('request' => $parameters)
            )
        );
    }
}

