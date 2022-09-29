<?php

namespace App\Repositories;

use App\Models\Prices;

interface PricesRepositoryInterface
{

    function one(int $id): ?Prices;
    function all(): ?array;
}
