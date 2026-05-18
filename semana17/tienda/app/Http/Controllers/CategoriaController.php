<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = categoria::all();
        return view('categoria.index',compact('categorias'));
    }

    public function create(request $request){
        categoria::create([
            'nombre'->$request->nombre,
            'descripcion'->$request->descripcion
        ]);
        return redirect('/categorias');
    }
}
