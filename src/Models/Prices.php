<?php

namespace App\Models;

class Prices
{
    public string $description;
    public float $price;
    public ?int $id;

    function  __construct(string $description,  float $price, ?int $id = null)
    {
        $this->description =  $description;
        $this->price =  $price;
        $this->id =  $id;
    }

    function setDescription(string $description): void
    {
        $this->description =  $description;
    }

    function setPrice(float $price): void
    {
        $this->price =  $price;
    }

    function setId(int $id): void
    {
        $this->id =  $id;
    }

    function getDescription(): string
    {
        return $this->description;
    }

    function getPrice(): float
    {
        return  $this->price;
    }

    function getId(): ?int
    {
        return $this->id;
    }
}
