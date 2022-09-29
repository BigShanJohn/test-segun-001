<?php

namespace App\Controllers;

use App\Managers\PricesManagerInterface;
use App\Repositories\PricesRepositoryInterface;

class PricesController
{
    private PricesManagerInterface $pricesManager;
    private PricesRepositoryInterface $priceRepository;

    function __construct(PricesManagerInterface $pricesManager, PricesRepositoryInterface $priceRepository)
    {
        $this->pricesManager = $pricesManager;
        $this->priceRepository = $priceRepository;
    }

    function list()
    {
        return  json_encode($this->priceRepository->all());
    }
}
