<?php
namespace Icepay\Api\Soap;

use Icepay\Api\Assert;
use Icepay\Api\Exception\BadResponseException;
use Icepay\Api\Exception\SoapFaultException;

abstract class SoapClient extends \SoapClient
{
    protected static $classMap = array();

    /**
     * @var string
     */
    private $secret;

    /**
     * @inheritDoc
     * @param string $secretCode
     */
    public function __construct($secretCode, $wsdl, array $options = array())
    {
        Assert::that($secretCode, null, 'secretCode')->notEmpty()->string();

        if (empty($options['classmap'])) {
            $options['classmap'] = static::$classMap;
        } else {
            foreach (static::$classMap as $soapType => $phpType) {
                if (!isset($options['classmap'][$soapType])) {
                    $options['classmap'][$soapType] = $phpType;
                }
            }
        }
        if (!isset($options['exceptions'])) {
            $options['exceptions'] = false;
        }

        parent::__construct($wsdl, $options);

        $this->secret = $secretCode;
    }

    /**
     * Check that a response has a given property and return that.
     *
     * @param object $response
     * @param string $property
     * @return mixed
     */
    protected function checkResponse($response, $property)
    {
        if ($response instanceof \SoapFault) {
            $exception = SoapFaultException::forSoapFault($response);
            if ($exception === null) {
                return null;
            }

            throw $exception;
        }

        if (!property_exists($response, $property)) {
            throw BadResponseException::forMissingResponseProperty($response, 'property');
        }

        $data = $response->{$property};
        if (method_exists($data, 'validChecksum') && !$data->validChecksum($this->secret)) {
            throw BadResponseException::forInvalidChecksum($data);
        }

        if (method_exists($data, '__wakeup')) {
            $data->__wakeup();
        }

        return $data;
    }
}
