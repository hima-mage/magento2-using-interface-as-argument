<?php

namespace HimaMage\InterfaceAsArgument\Model;

use HimaMage\InterfaceAsArgument\Api\CodeValidationInterface;
use http\Exception\InvalidArgumentException;

class CodeLengthValidation implements  CodeValidationInterface
{

    public function validate(string $code): void
    {
        if(strlen($code) > 10) {
            throw new InvalidArgumentException("this is not valid length");
        }
    }
}
