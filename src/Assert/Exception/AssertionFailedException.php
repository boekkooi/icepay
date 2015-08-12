<?php

namespace Icepay\Api\Assert\Exception;

use Icepay\Api\Exception\Exception;

interface AssertionFailedException extends Exception
{
    public function __construct($message, $code, $propertyPath = null, $value, array $constraints = array());
    public function getPropertyPath();
    public function getValue();
    public function getConstraints();
}

