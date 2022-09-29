<?php

namespace App\Models;

class Prices
{
    public string $description;
    public float $price;
    public int $id;

    function  __construct(string $description,  float $price, int $id = null)
    {
        $this->description =  $description;
        $this->price =  $price;
        $this->id =  $id;
    }
}
