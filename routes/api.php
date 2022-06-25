<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Dompdf\Dompdf;

use App\Http\Controllers\ParamController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UploadFileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('param', ParamController::class);
Route::apiResource('product', ProductController::class);
Route::post('product/delete/file', [ProductController::class, 'deleteFile']);
Route::post('product/change_state', [ProductController::class, 'changeStateProduct']);
Route::apiResource('category', CategoryController::class);

Route::post('upload/file', [UploadFileController::class, 'uploadFile']);
Route::post('upload/base', 'UploadFileController@uploadFileBase64Image');
Route::post('upload/delete', [UploadFileController::class, 'deleteFile']);

Route::post('autoresponder', function (Request $request) {
    return [
        'replies' => [
            [
                'message' => 'Envío de imagenes https://i.pinimg.com/564x/50/d0/19/50d0197190ee84c82fb8443921c90651.jpg'
            ],
            [
                'message' => 'Mensaje 2'
            ],
            [
                'message' => 'Mensaje 3'
            ],
        ]
    ];
});
