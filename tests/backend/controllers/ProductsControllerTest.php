<?php

use App\Models\Product;
use Core\JsonResponse;
use PHPUnit\Framework\TestCase;

class ProductsControllerTest extends TestCase
{
    public function testItWillReturnJsonResponse()
    {
        error_reporting(0);
        $response = new JsonResponse(Product::getProducts(), 200, '');

        $this->assertJson(json_encode($response));
        error_reporting(1);
    }
}