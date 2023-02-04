<?php

namespace HimaMage\InterfaceAsArgument\Api\Data;

interface SupplyInterface
{
    public function getCode() : string;

    public function setCode(string $value) : void;
}
