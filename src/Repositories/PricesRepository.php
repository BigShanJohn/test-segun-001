<?php

namespace App\Repositories;

use App\Models\Prices;
use App\Core\Database;

class PricesRepository extends Database implements PricesRepositoryInterface
{
    function __construct()
    {
        parent::__construct();
    }


    /**
     * select single record from prices table.
     * @param id (int)
     */

    function one(int $id): ?Prices
    {
        $this->query(
            "SELECT * FROM prices WHERE id = :id"
        );
        $this->bind(":id", $id);
        $data = $this->single();

        return new Prices($data['description'], $data['price'], $data['id']);
    }

    /**
     * select all records from prices table.
     * @param id (int)
     */

    function all(): ?array
    {
        $this->query(
            "SELECT * FROM prices"
        );
        $result = array();
        $dataset = $this->resultset();

        foreach ($dataset as $data) {
            $result[] = new Prices($data['description'], $data['price'], $data['id']);
        }

        return $result;
    }
}
