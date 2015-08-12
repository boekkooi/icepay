<?php

namespace Icepay\Api\Assert\Exception;

use Icepay\Api\Exception\Exception;

class LazyAssertionException extends \InvalidArgumentException implements Exception
{
    /**
     * @var InvalidArgumentException[]
     */
    private $errors = array();

    /**
     * @param InvalidArgumentException[] $errors
     * @return self
     */
    static public function fromErrors(array $errors)
    {
        $message = sprintf('The following %d assertions failed:' , count($errors)) . "\n";

        $i = 1;
        foreach ($errors as $error) {
            $message .= sprintf("%d) %s: %s\n", $i++, $error->getPropertyPath(), $error->getMessage());
        }

        return new self($message, $errors);
    }

    public function __construct($message, array $errors)
    {
        parent::__construct($message, 0);

        $this->errors = $errors;
    }

    public function getErrorExceptions()
    {
        return $this->errors;
    }
}
