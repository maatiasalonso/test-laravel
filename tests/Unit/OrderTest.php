<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Models\Product;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function test_an_order_constist_of_products()
    {
        $order = $this->createOrderWithProducts();

        $this->assertCount(3, $order->products());
    }

    public function test_an_order_can_determine_the_total_cost_of_all_its_products()
    {

        $order = $this->createOrderWithProducts();

        $this->assertEquals(76, $order->total());
    }

    protected function createOrderWithProducts()
    {
        $order = new Order;

        $product = new Product('Fallout 4', 59);
        $product2 = new Product('Pillowcase', 7);
        $product3 = new Product('Pillowcase', 10);

        $order->add($product);
        $order->add($product2);
        $order->add($product3);

        return $order;
    }
}
