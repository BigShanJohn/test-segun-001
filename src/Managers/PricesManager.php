<?php

namespace App\Managers;

use App\Models\Prices;
use App\Core\Database;
use App\Managers\PricesManagerInterface;

class PricesManager extends Database implements PricesManagerInterface
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * add to the prices table.
     * @param price (object)
     */

    function add(Prices $prices): Prices
    {
        $this->query(
            "INSERT INTO prices (description, price) VALUES (:description, :price)"
        );
        $this->bind(":description", $prices->getDescription());
        $this->bind(":price", $prices->getPrice());
        $this->execute();
        $prices->setId($this->lastInsertId());
        return  $prices;
    }


    /**
     * update the prices table.
     * @param price (object)
     */


    function update(Prices $prices): Prices
    {
        $this->query(
            "UPDATE prices  SET description = :description, price = :price WHERE  id = :id"
        );
        $this->bind(":description", $prices->getDescription());
        $this->bind(":price", $prices->getPrice());
        $this->bind(":id", $prices->getId());
        $this->execute();
        return $prices;
    }


    /**
     * remove from the prices table.
     * @param price (object)
     */

    function delete(Prices $price): bool
    {
        $this->query(
            "DELETE FROM prices  WHERE  id = :id"
        );
        $this->bind(":id", $price->getId());
        return $this->execute();
    }
}
