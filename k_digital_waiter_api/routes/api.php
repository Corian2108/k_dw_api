<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/details', App\Http\Controllers\Api\V1\DetailController::class);
Route::apiResource('v1/dishes', App\Http\Controllers\Api\V1\DishController::class);
Route::apiResource('v1/orders', App\Http\Controllers\Api\V1\OrderController::class);
Route::apiResource('v1/states', App\Http\Controllers\Api\V1\StateController::class);
Route::apiResource('v1/tables', App\Http\Controllers\Api\V1\TableController::class);
