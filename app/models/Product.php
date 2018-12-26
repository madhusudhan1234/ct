<?php

namespace App\Models;

class Product
{
    public static function getProducts(){
        return [
            [
                "name" => "Tshirt",
                "price" => "100",
                "currency" => "USD",
            ],
            [
                "name" => "Monitor",
                "price" => "100",
                "currency" => "USD",
            ]
        ];
    }
}