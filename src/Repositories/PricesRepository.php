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
        return $this->single();
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
        return $this->resultset();
    }
}
