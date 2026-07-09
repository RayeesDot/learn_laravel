<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('products',ProductController::class); // work for all http methods

Route::delete('product/{name}',[ProductController::class, 'destroyByName']);


