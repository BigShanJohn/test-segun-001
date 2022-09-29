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

    function add(Prices $price): int
    {
        $this->query(
            "INSERT INTO prices (description, price) VALUES (:description, :price)"
        );
        $this->bind(":description", $price->description);
        $this->bind(":price", $price->price);
        $this->execute();
        return  $this->lastInsertId();
    }


    /**
     * update the prices table.
     * @param price (object)
     */


    function update(Prices $price): bool
    {
        $this->query(
            "UPDATE prices  SET description = :description, price = :price WHERE  id = :id"
        );
        $this->bind(":description", $price->description);
        $this->bind(":price", $price->price);
        $this->bind(":id", $price->id);
        return $this->execute();
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
        $this->bind(":id", $price->id);
        return $this->execute();
    }
}
