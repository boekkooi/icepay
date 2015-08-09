<?php
namespace Icepay\Api;

use Icepay\Api\IcePay\AutomaticCheckout;
use Icepay\Api\IcePay\AutomaticCheckoutResponse;
use Icepay\Api\IcePay\Checkout;
use Icepay\Api\IcePay\CheckoutExtended;
use Icepay\Api\IcePay\CheckoutExtendedResponse;
use Icepay\Api\IcePay\CheckoutResponse;
use Icepay\Api\IcePay\GetMyPaymentMethods;
use Icepay\Api\IcePay\GetMyPaymentMethodsResponse;
use Icepay\Api\IcePay\GetPayment;
use Icepay\Api\IcePay\GetPaymentResponse;
use Icepay\Api\IcePay\GetPhoneStatus;
use Icepay\Api\IcePay\GetPhoneStatusResponse;
use Icepay\Api\IcePay\GetPremiumRateNumbers;
use Icepay\Api\IcePay\GetPremiumRateNumbersResponse;
use Icepay\Api\IcePay\PhoneCheckout;
use Icepay\Api\IcePay\PhoneCheckoutResponse;
use Icepay\Api\IcePay\PhoneDirectCheckout;
use Icepay\Api\IcePay\PhoneDirectCheckoutResponse;
use Icepay\Api\IcePay\SMSCheckout;
use Icepay\Api\IcePay\SMSCheckoutResponse;
use Icepay\Api\IcePay\ValidatePhoneCode;
use Icepay\Api\IcePay\ValidatePhoneCodeResponse;
use Icepay\Api\IcePay\ValidateSmsCode;
use Icepay\Api\IcePay\ValidateSmsCodeResponse;
use Icepay\Api\IcePay\VaultCheckout;
use Icepay\Api\IcePay\VaultCheckoutResponse;
use SoapClient;

class IcePayClient extends SoapClient
{

    private static $classMap = array(
        'Checkout' => Checkout::class,
        'CheckoutResponse' => CheckoutResponse::class,
        'VaultCheckout' => VaultCheckout::class,
        'VaultCheckoutResponse' => VaultCheckoutResponse::class,
        'AutomaticCheckout' => AutomaticCheckout::class,
        'AutomaticCheckoutResponse' => AutomaticCheckoutResponse::class,
        'CheckoutExtended' => CheckoutExtended::class,
        'CheckoutExtendedResponse' => CheckoutExtendedResponse::class,
        'SMSCheckout' => SMSCheckout::class,
        'SMSCheckoutResponse' => SMSCheckoutResponse::class,
        'PhoneCheckout' => PhoneCheckout::class,
        'PhoneCheckoutResponse' => PhoneCheckoutResponse::class,
        'PhoneDirectCheckout' => PhoneDirectCheckout::class,
        'PhoneDirectCheckoutResponse' => PhoneDirectCheckoutResponse::class,
        'ValidatePhoneCode' => ValidatePhoneCode::class,
        'ValidatePhoneCodeResponse' => ValidatePhoneCodeResponse::class,
        'GetPhoneStatus' => GetPhoneStatus::class,
        'GetPhoneStatusResponse' => GetPhoneStatusResponse::class,
        'ValidateSmsCode' => ValidateSmsCode::class,
        'ValidateSmsCodeResponse' => ValidateSmsCodeResponse::class,
        'GetPayment' => GetPayment::class,
        'GetPaymentResponse' => GetPaymentResponse::class,
        'GetPremiumRateNumbers' => GetPremiumRateNumbers::class,
        'GetPremiumRateNumbersResponse' => GetPremiumRateNumbersResponse::class,
        'GetMyPaymentMethods' => GetMyPaymentMethods::class,
        'GetMyPaymentMethodsResponse' => GetMyPaymentMethodsResponse::class,
        'CheckoutRequest' => \Icepay\Api\DataContract\CheckoutRequestType::class,
        'http://schemas.datacontract.org/2004/07/APIService#CheckoutResponse' => \Icepay\Api\DataContract\CheckoutResponseType::class,
        'VaultCheckoutRequest' => \Icepay\Api\DataContract\VaultCheckoutRequestType::class,
        'AutomaticCheckoutRequest' => \Icepay\Api\DataContract\AutomaticCheckoutRequestType::class,
        'http://schemas.datacontract.org/2004/07/APIService#AutomaticCheckoutResponse' => \Icepay\Api\DataContract\AutomaticCheckoutResponseType::class,
        'CheckoutExtendedRequest' => \Icepay\Api\DataContract\CheckoutExtendedRequestType::class,
        'http://schemas.datacontract.org/2004/07/APIService#SMSCheckoutResponse' => \Icepay\Api\DataContract\SMSCheckoutResponseType::class,
        'http://schemas.datacontract.org/2004/07/APIService#PhoneCheckoutResponse' => \Icepay\Api\DataContract\PhoneCheckoutResponseType::class,
        'CheckoutWithPINRequest' => \Icepay\Api\DataContract\CheckoutWithPINRequestType::class,
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
     * @param Checkout $parameters
     * @return CheckoutResponse
     */
    public function Checkout(Checkout $parameters)
    {
        return $this->__soapCall('Checkout', array($parameters));
    }

    /**
     * @param VaultCheckout $parameters
     * @return VaultCheckoutResponse
     */
    public function VaultCheckout(VaultCheckout $parameters)
    {
        return $this->__soapCall('VaultCheckout', array($parameters));
    }

    /**
     * @param AutomaticCheckout $parameters
     * @return AutomaticCheckoutResponse
     */
    public function AutomaticCheckout(AutomaticCheckout $parameters)
    {
        return $this->__soapCall('AutomaticCheckout', array($parameters));
    }

    /**
     * @param CheckoutExtended $parameters
     * @return CheckoutExtendedResponse
     */
    public function CheckoutExtended(CheckoutExtended $parameters)
    {
        return $this->__soapCall('CheckoutExtended', array($parameters));
    }

    /**
     * @param SMSCheckout $parameters
     * @return SMSCheckoutResponse
     */
    public function SMSCheckout(SMSCheckout $parameters)
    {
        return $this->__soapCall('SMSCheckout', array($parameters));
    }

    /**
     * @param PhoneCheckout $parameters
     * @return PhoneCheckoutResponse
     */
    public function PhoneCheckout(PhoneCheckout $parameters)
    {
        return $this->__soapCall('PhoneCheckout', array($parameters));
    }

    /**
     * @param PhoneDirectCheckout $parameters
     * @return PhoneDirectCheckoutResponse
     */
    public function PhoneDirectCheckout(PhoneDirectCheckout $parameters)
    {
        return $this->__soapCall('PhoneDirectCheckout', array($parameters));
    }

    /**
     * @param ValidatePhoneCode $parameters
     * @return ValidatePhoneCodeResponse
     */
    public function ValidatePhoneCode(ValidatePhoneCode $parameters)
    {
        return $this->__soapCall('ValidatePhoneCode', array($parameters));
    }

    /**
     * @param GetPhoneStatus $parameters
     * @return GetPhoneStatusResponse
     */
    public function GetPhoneStatus(GetPhoneStatus $parameters)
    {
        return $this->__soapCall('GetPhoneStatus', array($parameters));
    }

    /**
     * @param ValidateSmsCode $parameters
     * @return ValidateSmsCodeResponse
     */
    public function ValidateSmsCode(ValidateSmsCode $parameters)
    {
        return $this->__soapCall('ValidateSmsCode', array($parameters));
    }

    /**
     * @param GetPayment $parameters
     * @return GetPaymentResponse
     */
    public function GetPayment(GetPayment $parameters)
    {
        return $this->__soapCall('GetPayment', array($parameters));
    }

    /**
     * @param GetPremiumRateNumbers $parameters
     * @return GetPremiumRateNumbersResponse
     */
    public function GetPremiumRateNumbers(GetPremiumRateNumbers $parameters)
    {
        return $this->__soapCall('GetPremiumRateNumbers', array($parameters));
    }

    /**
     * @param GetMyPaymentMethods $parameters
     * @return GetMyPaymentMethodsResponse
     */
    public function GetMyPaymentMethods(GetMyPaymentMethods $parameters)
    {
        return $this->__soapCall('GetMyPaymentMethods', array($parameters));
    }


}

