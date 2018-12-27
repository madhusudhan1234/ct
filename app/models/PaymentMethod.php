<?php

namespace App\Models;

class PaymentMethod
{
    public static function getPaymentMethods()
    {
        return [
            [
                "id" => "1",
                "type" => "cash",
                "name" => "Cash on Delivery"
            ],
            [
                "id" => "2",
                "type" => "stripe",
                "name" => "Stripe Payment Gateway"
            ]
        ];
    }
}