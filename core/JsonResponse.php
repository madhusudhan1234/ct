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
        $status = array(
            200 => '200 OK',
            400 => '400 Bad Request',
            422 => 'Unprocessable Entity',
            500 => '500 Internal Server Error'
        );
        header('Status: '.$status[$code]);
        echo json_encode(array(
            'status' => $code < 300,
            'message' => $message,
            'data' => $data
        ));
    }
}