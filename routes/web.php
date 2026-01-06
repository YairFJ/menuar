<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProvinciaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/departamentos', [DepartamentoController::class , 'index']);

Route::get('/provincias', [ProvinciaController::class , 'index']);
