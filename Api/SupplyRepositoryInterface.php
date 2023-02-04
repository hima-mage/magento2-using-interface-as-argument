<?php

namespace HimaMage\InterfaceAsArgument\Api;

use HimaMage\InterfaceAsArgument\Api\Data\SupplyInterface;

interface SupplyRepositoryInterface
{
    public function createNew(string $code) : SupplyInterface;
}
