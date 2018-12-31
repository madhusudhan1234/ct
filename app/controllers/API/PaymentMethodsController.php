<?php

namespace App\Controllers\API;

use App\Controllers\Interfaces\PaymentMethodsControllerInterface;
use App\Models\PaymentMethod;
use Core\JsonResponse;

/**
 * Class PaymentMethodsController
 * @package App\Controllers\API
 */
class PaymentMethodsController implements PaymentMethodsControllerInterface
{
    /**
     * @return JsonResponse
     */
    public function index()
    {
        try {
            return new JsonResponse(PaymentMethod::getPaymentMethods(), 200);
        } catch(\Exception $e) {
            return new JsonResponse(null, 500, $e->getMessage());
        }
    }

}