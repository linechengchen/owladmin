<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|-----------------------------------
---------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("login", [\App\Http\Controllers\AuthController::class,'login']);
Route::post("reloadCaptcha", [\App\Http\Controllers\AuthController::class,'reloadCaptcha']);
Route::get('banner',function (Request $request) {
    $images = [
        "1a85d723-ad00-4272-b310-508ba87e7aeb.jpg",
        "7fc3dcc3-c951-49ed-b072-9a7bffbe6c45.jpg",
        "8d579a1b-3b06-47f6-8a48-ef64e6274ef9.jpg",
        "379a3cc7-af91-4f69-9198-0e10890af8d8.jpg",
        "766b4754-32b8-4752-85f5-fb97e0012293.jpg",
        "43763c75-5932-4f3a-b8e4-65790b0b0189.jpg",
        "dd52a8af-7c7d-4d36-be95-61a436fb50d9.jpg",
    ];

    $imageUrls = [];

    foreach ($images as $image) {
            // Handle regular images
            $imageUrls[] = "https://owl.zjzenbo.com/images/wechatbanner/{$image}";
    }

// Output the array as JSON
    echo json_encode($imageUrls);
});
