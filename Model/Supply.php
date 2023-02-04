<?php

namespace HimaMage\InterfaceAsArgument\Model;

use HimaMage\InterfaceAsArgument\Api\Data\SupplyInterface;

class Supply implements  SupplyInterface
{
    protected  string $code;

    public function getCode(): string
    {
        return  $this->code;
    }

    public function setCode(string $value): void
    {
        $this->code = $value;
    }
}
