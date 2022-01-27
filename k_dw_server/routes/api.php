<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource("Bebidas", App\Http\Controllers\BebidasController::class);
Route::apiResource("Entrada", App\Http\Controllers\EntradaController::class);
Route::apiResource("Evento", App\Http\Controllers\EventoController::class);
Route::apiResource("Foto_entrada", App\Http\Controllers\Foto_entradaController::class);
Route::apiResource("Foto_evento", App\Http\Controllers\Foto_eventoController::class);
Route::apiResource("Foto_fuerte", App\Http\Controllers\Foto_fuerteController::class);
Route::apiResource("Foto_lugar", App\Http\Controllers\Foto_lugarController::class);
Route::apiResource("Foto_perfil", App\Http\Controllers\Foto_perfilController::class);
Route::apiResource("Foto_postre", App\Http\Controllers\Foto_postreController::class);
Route::apiResource("Fuerte", App\Http\Controllers\FuerteController::class);
Route::apiResource("Lugar", App\Http\Controllers\LugarController::class);
Route::apiResource("Menu", App\Http\Controllers\MenuController::class);
Route::apiResource("Postre", App\Http\Controllers\PostreController::class);
Route::apiResource("Reservacion", App\Http\Controllers\ReservacionController::class);
Route::apiResource("Rol", App\Http\Controllers\RolController::class);
Route::apiResource("User", App\Http\Controllers\UserController::class);
