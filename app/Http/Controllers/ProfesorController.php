<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Profesor::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_profesor' => 'required',
            'nombre' => 'required',
            'clave_usuario' => 'required'
        ]);

        $profesor = new Profesor;
        $profesor->clave_profesor = $request->clave_profesor;
        $profesor->nombre = $request->nombre;
        $profesor->clave_usuario = $request->clave_usuario;
        $profesor->save();
        return $profesor;
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        return $profesor;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profesor $profesor)
    {
        $request->validate([
            'clave_profesor' => 'required',
            'nombre' => 'required',
            'clave_usuario' => 'required',
        ]);

        $profesor = new Profesor;
        $profesor->clave_profesor = $request->clave_profesor;
        $profesor->nombre = $request->nombre;
        $profesor->clave_usuario = $request->clave_usuario;
        $profesor->update();
        return $profesor;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return [];
    }
}
