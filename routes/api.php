<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('add_to_cart', [ProductController::class,'addToCart']);
Route::get('cartlist', [ProductController::class,'cartList']);
Route::get('ordernow', [ProductController::class,'orderNow']);
Route::post('orderplace', [ProductController::class,'orderPlace']);
Route::get('myorders', [ProductController::class,'myOrders']);
Route::get('removecart/{id}', [ProductController::class,'removeCart']);


