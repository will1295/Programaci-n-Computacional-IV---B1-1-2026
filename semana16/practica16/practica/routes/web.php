<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;

Route::get('/',[PeliculasController::class,'index']);
