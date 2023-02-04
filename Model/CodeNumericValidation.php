<?php

namespace HimaMage\InterfaceAsArgument\Model;

use HimaMage\InterfaceAsArgument\Api\CodeValidationInterface;
use http\Exception\InvalidArgumentException;

class CodeNumericValidation implements CodeValidationInterface
{

    public function validate(string $code): void
    {
        throw new InvalidArgumentException('this code should be have alpha chars ');
    }
}
