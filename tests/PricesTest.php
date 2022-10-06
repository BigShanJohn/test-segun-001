<?php

declare(strict_types=1);

use App\Models\Prices;
use phpDocumentor\Reflection\Types\Null_;
use PHPUnit\Framework\TestCase;

final class PricesTest extends TestCase
{
    public function testPriceObject(): Prices
    {
        $prices = new Prices('Mango', 50);
        $this->assertEquals($prices->getDescription(), 'Mango');
        $this->assertEquals($prices->getPrice(), 50);
        $this->assertEquals($prices->getId(), NULL);
        return  $prices;
    }


    /** @depends testPriceObject */
    public function testDescriptionCanBeSet($prices): void
    {
        $prices->setDescription('Orange');
        $this->assertEquals($prices->getDescription(), 'Orange');
    }

    /** @depends testPriceObject */
    public function testPricenCanBeSet($prices): void
    {
        $prices->setPrice(100);
        $this->assertEquals($prices->getPrice(), 100);
    }

    /** @depends testPriceObject */
    public function testIdnCanBeSet($prices): void
    {
        $prices->setId(1);
        $this->assertEquals($prices->getId(), 1);
    }
}
