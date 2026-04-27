<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('empleados.index');
    }

    public function ver($id){
        $empleados = [
            1=>['nombre'=>'juan','apellido'=>'perez'],
            2=>['nombre'=>'maria','apellido'=>'fernandez'],
            3=>['nombre'=>'luis','apellido'=>'hernandez'],
        ];

        if(!array_key_exists($id,$empleados)){
            abort(404,"El id no existe");
        }
        $empleado = $empleados[$id];
        return view('empleados.verempleado',compact('id','empleado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
