<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function mostrarInfo(){
        $usuario = "JuanPerez";
        $fecha = date('d/m/Y');
        return view('contacto',[
            'nombre'=>$usuario,
            'fecha'=>$fecha
        ]);
    }

    public function mostrarProductos(){
        $productos = [
            [
            'id'=>1,
            'nombre'=>'aceite',
            'precio'=>1.25,
            'stock'=>10
            ],
            [
            'id'=>2,
            'nombre'=>'azucar libra',
            'precio'=>0.50,
            'stock'=>8
            ]
        ];
        return view('productos',compact('productos'));
    }
}
