<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource("evento", App\Http\Controllers\EventoController::class);
Route::apiResource("foto_lugar", App\Http\Controllers\Foto_lugarController::class);
Route::apiResource("foto_perfil", App\Http\Controllers\Foto_perfilController::class);
Route::apiResource("lugar", App\Http\Controllers\LugarController::class);
Route::apiResource("reservacion", App\Http\Controllers\ReservacionController::class);
Route::apiResource("rol", App\Http\Controllers\RolController::class);
Route::apiResource("user", App\Http\Controllers\UserController::class);
