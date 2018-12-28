<?php

namespace App\Models;

class Product
{
    public static function getProducts() {
        $productStr = file_get_contents("https://my-json-server.typicode.com/madhusudhan1234/madhusudhan1234/products");
        $products = json_decode($productStr, true);

        return $products;
    }
}