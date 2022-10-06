<?php

namespace App\Managers;

use App\Models\Prices;

interface PricesManagerInterface
{

    function add(Prices $price): Prices;

    function update(Prices $price): Prices;

    function delete(Prices $price): bool;
}
