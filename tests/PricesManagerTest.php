<?php

declare(strict_types=1);

use App\Models\Prices;
use App\Managers\PricesManager;
use PHPUnit\Framework\TestCase;

final class PricesManagerTest extends TestCase
{
    private $manger;

    function setUp(): void
    {
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'test01_db');
        define('DB_VENDOR', 'mysql');
        $this->manger = new PricesManager();
    }


    public function testPricesCanBeAdd(): Prices
    {
        $prices = new Prices('Mango', 50);
        $result = $this->manger->add($prices);
        $this->assertNotNull($result->getId());
        return  $result;
    }

    /** @depends testPricesCanBeAdd */
    public function testPricesCanBeUpdate(Prices $prices): Prices
    {
        $prices->setDescription('Banana');
        $result = $this->manger->update($prices);
        $this->assertEquals($result->getDescription(), 'Banana');
        return  $result;
    }

    /** @depends testPricesCanBeUpdate */
    public function testPricesCanBeDelete(Prices $prices): void
    {
        $result = $this->manger->delete($prices);
        $this->assertEquals($result, TRUE);
    }
}
