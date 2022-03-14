<?php

use App\Models\Post;
use App\Http\Controllers\PostsApiController;
use App\Http\Controllers\LeastOrdersApiController;
use App\Http\Controllers\OrderController;
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
Route::get('/',function(){
    return view('welcome');
});

Route::get('/orders', [OrderController::class,'index']);
Route::get('/orders/{order}/edit', [OrderController::class,'edit']);
Route::put('/orders/{order}', [OrderController::class,'update']);
Route::post('/orders', [LeastOrdersApiController::class,'storeproducts']);
Route::put('/orders/{post}', [LeastOrdersApiController::class,'updateproducts']);
Route::delete('/orders/{post}', [LeastOrdersApiController::class,'destroyproducts']);

Route::get('/products', [ProductController::class,'index']);
Route::post('/products', [ProductController::class,'postUpdate']);
