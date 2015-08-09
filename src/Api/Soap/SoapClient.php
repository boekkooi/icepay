<?php
namespace Icepay\Api\Soap;

abstract class SoapClient extends \SoapClient
{
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
            return $response;
        }

        if (!property_exists($response, $property)) {
            // TODO better error
            throw new \RuntimeException('Unexpected response');
        }
        return $response->{$property};
    }
}
