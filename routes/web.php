<?php

use App\Http\Controllers\CArticulo;
use App\Http\Controllers\CPrincipal;
use Illuminate\Support\Facades\Route;

// PRINCIPAL
Route::get('/', [CPrincipal::class, 'showVInicio']);

// GESTION DE ARTICULOS
Route::get('/articulo/index', [CArticulo::class, 'index']);
Route::post('/articulo/search', [CArticulo::class, 'search']);
Route::get('/articulo/create', [CArticulo::class, 'create']);
Route::post('/articulo/store', [CArticulo::class, 'store']);
Route::get('/articulo/edit/{id}', [CArticulo::class, 'edit']);
Route::put('/articulo/update', [CArticulo::class, 'update']);
Route::get('/articulo/destroy/{id}', [CArticulo::class, 'destroy']);
