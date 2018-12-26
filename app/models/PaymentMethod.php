<?php

namespace App\Models;

class PaymentMethod
{
    public static function getPaymentMethods()
    {
        return [
            [
                "type" => "cash",
                "name" => "Cash on Delivery"
            ],
            [
                "type" => "stripe",
                "name" => "Stripe Payment Gateway"
            ]
        ];
    }
}