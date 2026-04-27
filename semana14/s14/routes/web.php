<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\EmpleadosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo',[EjemploController::class,'index']);
Route::get('/mipagina',[EjemploController::class,'pagina']);
Route::get('/mostrarInfo',[DatosController::class,'mostrarInfo']);
Route::get('/mostrarProductos',[DatosController::class,'mostrarProductos']);
Route::get('/mostrarEmpleados',[EmpleadosController::class,'index']);
Route::get('/empleado/{id}',[EmpleadosController::class,'ver']);
