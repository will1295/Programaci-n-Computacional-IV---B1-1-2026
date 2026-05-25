<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClientesController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/saludo',function(){
    return response()->json([
        'mensaje'=>"Hola soy una API!"
    ]);
});

Route::get('/productos',[ProductoController::class,'index']);
Route::get('/clientes',[ClientesController::class,'index']);
Route::post('/clientes',[ClientesController::class,'store']);

