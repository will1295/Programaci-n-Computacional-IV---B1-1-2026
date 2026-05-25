<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::all();
        return response()->json($clientes);    

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'=>'required|string|max:255',
            'dui'=>'required|integer|unique:tblclientes,dui',
            'email'=>'required|email|unique:tblclientes,email',
            'telefono'=>'required|integer'
        ]);
        $cliente = Clientes::create($validated);
        return response()->json([
            'message'=>"Cliente creado correctamente",
            "cliente"=>$cliente
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
