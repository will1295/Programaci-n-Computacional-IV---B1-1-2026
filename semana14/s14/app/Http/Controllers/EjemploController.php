<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function index(){
        return "Hola este mensaje esta desde mi controlador";
    }

    public function pagina(){
        return view('mipagina');
    }
}
