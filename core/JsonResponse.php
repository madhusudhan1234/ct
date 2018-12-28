<?php

namespace Core;

class JsonResponse
{
    public function __construct($data = null, $code = 200, $message = null)
    {
        header_remove();
        http_response_code($code);
        header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
        header('Content-Type: application/json');
        header('Status:'. $code);
        echo json_encode([
            'status' => $code,
            'message' => $message,
            'data' => $data
        ]);
    }
}