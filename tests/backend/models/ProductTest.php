<?php

use App\Models\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testCanReturnAllProducts() {
        $this->assertCount(2, Product::getProducts());
    }
}