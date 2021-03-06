<?php

namespace App\Controllers\API;

use App\Controllers\Interfaces\OrderControllerInterface;
use Core\JsonResponse;

/**
 * Class OrderController
 * @package App\Controllers\API
 */
class OrderController implements OrderControllerInterface
{
    /**
     * @return JsonResponse
     */
    public function store()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));

            $decoded = json_decode($content, true);

            return new JsonResponse(
                null,
                201,
                sprintf(
                    "Hey! You selected %s %s and paid %s with %s",
                    $decoded['quantity'],
                    $decoded['name'],
                    $decoded['price'] * $decoded['quantity'],
                    $decoded['payment_method']
                )
            );
        }
    }
}
