<?php

namespace App\Controllers\API;

use App\Models\Product;
use Core\JsonResponse;

/**
 * Class ProductsController
 * @package App\Controllers\API
 */
class ProductsController
{
    /**
     * @return JsonResponse
     */
    public function index() {
        try {
            return new JsonResponse(Product::getProducts(), 200);
        } catch (\Exception $e) {
            return new JsonResponse(null, 500, "Something Went Wrong");
        }
    }
}