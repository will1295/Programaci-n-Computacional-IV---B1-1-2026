<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index(){
        return view('calculadora');
    }

    public function calcular(Request $request){
        $n1 = $request->n1;
        $n2 = $request->n2;
        $op = $request->op;
        $res = 0;

        switch($op){
            case "sumar":$res = $n1+$n2;
            break;
            case "restar":$res = $n1-$n2;
            break;
            case "multi":$res = $n1*$n2;
            break;
            case "dividir":$res = $n1/$n2;
            break;
        }
        return response()->json(['res'=>$res]);
    }
}
