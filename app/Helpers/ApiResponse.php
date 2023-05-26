<?php

namespace App\Helpers;

class ApiResponse
{
    public static function response($success, $data, $message, $code = 200)
    {
        return response()->json([
            'success' => $success,
            'data' => $data,
            'message' => $message,
        ], $code);
    }
}
