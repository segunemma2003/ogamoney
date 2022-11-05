<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DeliveryItemController;
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

Route::fallback(function(){
    return response()->json(['message' => 'Not Found.'], 404);
})->name('api.fallback.404');

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::group(['middleware'=>'auth:sanctum'],function(){
    Route::get('auth/me', [AuthController::class, 'me']);
    Route::apiResource('services', ServiceCategoryController::class);
    Route::apiResource('items', ItemController::class);
    Route::apiResource('delivery-item', DeliveryItemController::class);
});
