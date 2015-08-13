<?php
namespace Icepay\Api\Exception;

class SoapFaultException extends \RuntimeException implements Exception
{
    /**
     * @param \SoapFault $fault
     * @return SoapFaultException|null
     */
    public static function forSoapFault(\SoapFault $fault)
    {
        if (!preg_match('/(?:ICE|ERR)_(?P<code>[0-9]+):\s(?P<message>.*)/', $fault->getMessage(), $matches)) {
            return new self($fault->getMessage(), -1, $fault);
        }

        $code = intval($matches['code']);
        $message = $matches['message'];

        // If the code indicates a 404 (not found) then return null
        if (in_array($code, [6, 9], true)) {
            return null;
        }

        return new self($message, $code, $fault);
    }
}
