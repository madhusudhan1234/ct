<?php

namespace App\Models;

class PaymentMethod
{
    public static function getPaymentMethods()
    {
        $pamentMethodsStr = file_get_contents("https://my-json-server.typicode.com/madhusudhan1234/madhusudhan1234/payment_methods");
        $paymentMethods = json_decode($pamentMethodsStr, true);

        return $paymentMethods;
    }
}