<?php

namespace Core;

/**
 * Class JsonResponse
 * @package Core
 */
class JsonResponse
{
    /**
     * JsonResponse constructor.
     * @param null $data
     * @param int $code
     * @param null $message
     */
    public function __construct($data = null, $code = 200, $message = null)
    {
        echo json_encode([
            'status' => $code,
            'message' => $message,
            'data' => $data
        ]);
    }
}