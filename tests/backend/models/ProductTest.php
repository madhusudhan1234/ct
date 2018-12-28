<?php
declare(strict_types=1);

use App\Models\Product;
use PHPUnit\Framework\TestCase;

$products = [
    [
        "id" => "1",
        "name" => "Tshirt",
        "price" => "50",
        "currency" => "USD",
    ],
    [
        "id" => "2",
        "name" => "Monitor",
        "price" => "100",
        "currency" => "USD",
    ]
];

class ProductTest extends TestCase{

    public function testCanReturnAllProducts() {
        $this->assertCount(2, Product::getProducts());
    }
}