<?php

namespace App\Models;

class Product
{
    public static function getProducts(){
        return [
            [
                "id" => "1",
                "name" => "Tshirt",
                "price" => "100",
                "currency" => "USD",
            ],
            [
                "id" => "2",
                "name" => "Monitor",
                "price" => "100",
                "currency" => "USD",
            ]
        ];
    }
}