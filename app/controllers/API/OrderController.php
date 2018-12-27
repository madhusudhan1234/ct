<?php

namespace App\Controllers\API;

use Core\JsonResponse;

class OrderController
{
    public function store()
    {
        return new JsonResponse(
            null,
            201,
            sprintf(
                "Hey! You selected %s %s and paid %s with %s",
                $_POST['quantity'],
                $_POST['name'],
                $_POST['price'],
                $_POST['payment_method']
            )
        );
    }
}
