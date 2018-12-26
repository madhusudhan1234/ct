<?php

namespace App\Controllers\API;

use App\Models\Product;
use Core\JsonResponse;

class ProductsController
{
    /**
     * @return JsonResponse
     */
    public function index() {
        return new JsonResponse(Product::getProducts());
    }
}