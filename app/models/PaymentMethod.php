<?php

namespace App\Models;

/**
 * Class PaymentMethod
 * @package App\Models
 */
class PaymentMethod
{
    /**
     * @return array
     */
    public static function getPaymentMethods()
    {
        $pamentMethodsStr = file_get_contents("https://my-json-server.typicode.com/madhusudhan1234/madhusudhan1234/payment_methods");
        $paymentMethods = json_decode($pamentMethodsStr, true);

        return $paymentMethods;
    }
}