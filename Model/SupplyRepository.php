<?php

namespace HimaMage\InterfaceAsArgument\Model;

use HimaMage\InterfaceAsArgument\Api\CodeValidationInterface;
use HimaMage\InterfaceAsArgument\Api\Data\SupplyInterfaceFactory;
use HimaMage\InterfaceAsArgument\Api\Data\SupplyInterface;
use HimaMage\InterfaceAsArgument\Api\SupplyRepositoryInterface;

class SupplyRepository implements  SupplyRepositoryInterface
{

    private SupplyInterfaceFactory $supplyFactory;
    private CodeValidationInterface $codeValidation;

    public function __construct(
        SupplyInterfaceFactory $supplyFactory,
        CodeValidationInterface $codeValidation
    )
    {
        $this->supplyFactory = $supplyFactory;
        $this->codeValidation = $codeValidation;
    }

    public function createNew(string $code ): SupplyInterface
    {
        $supply = $this->supplyFactory->create();
        $this->codeValidation->validate($code);
        $supply->setCode($code);
        return $supply;
    }
}
