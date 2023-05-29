<?php

namespace App\Helpers;

class ApiResponse
{
    public static function response($success, $data, $message, $code = 200)
    {
//     20000成功   50008：非法代币；50012:其他客户端登录；50014:令牌过期；
        return response()->json([
            'code' => $success,
            'data' => $data,
            'message' => $message,
        ], $code);
    }
}
