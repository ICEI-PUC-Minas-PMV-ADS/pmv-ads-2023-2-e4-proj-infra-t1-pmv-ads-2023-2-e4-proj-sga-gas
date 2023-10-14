<?php

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\OrderRequestController;
use App\Http\Controllers\Api\V1\ProductsController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

    Route::post('/user', [UserController::class, 'store']);
    Route::get('/users', [UserController::class, 'index'])->middleware('auth:sanctum');
    Route::get('/user/{user}', [UserController::class, 'show'])->middleware('auth:sanctum');
    Route::put('/user/{user}', [UserController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->middleware('auth:sanctum');

    Route::get('/customers', [CustomerController::class, 'index'])->middleware('auth:sanctum');
    Route::get('/customer/{customer}', [CustomerController::class, 'show'])->middleware('auth:sanctum');
    Route::post('/customer', [CustomerController::class, 'store'])->middleware('auth:sanctum');
    Route::put('/customer/{customer}', [CustomerController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('/customer/{customer}', [CustomerController::class, 'destroy'])->middleware('auth:sanctum');

    Route::get('/products', [ProductsController::class, 'index'])->middleware('auth:sanctum');
    Route::get('/product/{product}', [ProductsController::class, 'show'])->middleware('auth:sanctum');
    Route::post('/product', [ProductsController::class, 'store'])->middleware('auth:sanctum');
    Route::put('/product/{product}', [ProductsController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('/product/{product}', [ProductsController::class, 'destroy'])->middleware('auth:sanctum');

    Route::get('/order-requests', [OrderRequestController::class, 'index'])->middleware('auth:sanctum');
    Route::get('/order-request/{orderRequest}', [OrderRequestController::class, 'show'])->middleware('auth:sanctum');
    Route::post('/order-request', [OrderRequestController::class, 'store'])->middleware('auth:sanctum');
    Route::put('/order-request/{orderRequest}', [OrderRequestController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('/order-request/{orderRequest}', [OrderRequestController::class, 'destroy'])->middleware('auth:sanctum');
});