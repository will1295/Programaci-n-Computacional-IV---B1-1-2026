<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peliculas;

class PeliculasController extends Controller
{
    public function index(){
        $peliculas = Peliculas::all();
        return view('index',compact('peliculas'));
    }
}
