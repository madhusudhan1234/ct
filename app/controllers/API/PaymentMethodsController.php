<?php
namespace App\Controllers\API;

use App\Models\PaymentMethod;
use Core\JsonResponse;

class PaymentMethodsController
{
    /**
     * @return JsonResponse
     */
    public function index()
    {
        return new JsonResponse(PaymentMethod::getPaymentMethods());
    }

}