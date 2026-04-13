<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pagina2',function(){
    return view('pagina');})->name("pagina2");