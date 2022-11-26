<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    public function test_a_product_has_name()
    {
        $product = $this->setNewProduct();

        $this->assertEquals('Fallout 4', $product->name);
    }

    public function test_a_product_has_a_cost(){

        $product = $this->setNewProduct();

        $this->assertEquals(59, $product->cost);
    }

    protected function setNewProduct()
    {
        return new Product('Fallout 4', 59);
    }
}
