<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagina',[MiController::class,'index']);
Route::get('/cereal/{id}',[MiController::class,'ver']);
