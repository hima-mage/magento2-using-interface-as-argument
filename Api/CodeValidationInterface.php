<?php

namespace HimaMage\InterfaceAsArgument\Api;

interface CodeValidationInterface
{
    public function validate(string $code) : void;
}
