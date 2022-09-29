<?php

namespace App\Managers;

use App\Models\Prices;

interface PricesManagerInterface
{

    function add(Prices $price): int;

    function update(Prices $price): bool;

    function delete(Prices $price): bool;
}
