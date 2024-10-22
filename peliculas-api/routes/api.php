<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeliculaController;

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [LoginController::class, 'register'])->middleware('auth:sanctum');


Route::apiResource('peliculas', PeliculaController::class)
    ->middleware('auth:sanctum');
