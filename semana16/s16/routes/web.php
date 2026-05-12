<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/',[ProductoController::class,'index']);
Route::get('/guardar',[ProductoController::class,'formstore']);
Route::post('/guardar',[ProductoController::class,'store'])->name('guardar');

