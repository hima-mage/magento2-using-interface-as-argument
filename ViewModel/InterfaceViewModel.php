<?php

namespace HimaMage\InterfaceAsArgument\ViewModel;

use HimaMage\InterfaceAsArgument\Api\SupplyRepositoryInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class InterfaceViewModel implements  ArgumentInterface
{
    private SupplyRepositoryInterface $supplyRepository;

    public function __construct(SupplyRepositoryInterface $supplyRepository)
    {
        $this->supplyRepository = $supplyRepository;
    }

    public function getCode()
    {
        return $this->supplyRepository->createNew("ABD123")->getCode();

    }
}
