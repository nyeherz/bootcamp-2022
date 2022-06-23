<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login',[AuthController::class,'getLogin']);
route::post('/login', [AuthController::class,'postlogin']);
route::get('/login', [AuthController::class,'postlogout']);

Route::middleware (['middleware' => 'front'])->group (function ()
{
Route::get(uri: '/', [FrontController::class, 'getIndex']);
Route::get(uri: '/product/{id}', [ProductController::class, 'getDetail']);
Route::get(ur: '/cart', [CartController::class, 'getIndex']);
Route::get(uri: '/cart/add', [CartController::class, 'getAdd']);
Route::get(uri: '/cart/delete/{id}', [CartController::class, 'getDelete']);
Route::post( uri: '/cart/checkout', [CartController::class, 'postCheckout']);

});

    

