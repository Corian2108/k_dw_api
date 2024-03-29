<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource("evento", App\Http\Controllers\EventoController::class)->only('show');
Route::apiResource("foto_lugar", App\Http\Controllers\Foto_lugarController::class);
Route::apiResource("foto_perfil", App\Http\Controllers\Foto_perfilController::class);
Route::apiResource("lugar", App\Http\Controllers\LugarController::class)->only('show');
Route::apiResource("user", App\Http\Controllers\UserController::class)->only('show');
Route::apiResource("reservacion", App\Http\Controllers\ReservacionController::class);
Route::apiResource("rol", App\Http\Controllers\RolController::class)->only('show');
Route::post('register', 'App\Http\Controllers\UserController@register');
Route::post('login', 'App\Http\Controllers\UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('user', 'App\Http\Controllers\UserController@getAuthenticatedUser');
    Route::put('user', 'App\Http\Controllers\UserController@update');
    Route::post('evento', 'App\Http\Controllers\EventoController@store');
    Route::post('lugar', 'App\Http\Controllers\LugarController@store');
});