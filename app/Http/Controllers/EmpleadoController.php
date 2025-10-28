<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Incluimos el modelo
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Mostramos empleados
        $empleados = Empleado::all();
        return response()->json($empleados); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Creamos nuevo empleado
        $empleados = Empleado::create($request->all());
        return response()->json($empleados,201);

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
