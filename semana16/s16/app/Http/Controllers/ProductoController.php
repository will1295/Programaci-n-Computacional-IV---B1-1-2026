<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        //$productos = DB::select('SELECT * FROM productos');
        $productos = DB::table('productos')->get();
        return view('index',compact('productos'));
    }

    public function formstore(){
        return view('create');
    }

    public function store(Request $request){
        //DB::insert('insert into productos values (?,?,?,?)');
        DB::table('productos')->insert([
            'nombre'=>$request->nombre,
            'precio'=>$request->precio,
            'stock'=>$request->stock,
            'descripcion'=>$request->descripcion,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        return redirect()->back()->with('succes','Producto creado con exito');
    }
}
