<?php

use App\Models\Product;
use Core\JsonResponse;
use PHPUnit\Framework\TestCase;

class ProductsControllerTest extends TestCase
{
    public function testItWillReturnJsonResponse()
    {
        $response = new JsonResponse(Product::getProducts(), 200, '');

        $this->assertJson(json_encode($response));
    }
}