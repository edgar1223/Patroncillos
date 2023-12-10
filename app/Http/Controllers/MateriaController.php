<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Materia::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_materia' => 'required',
            'nombre' => 'required',
            'imagen' => 'required'
        ]);

        $materia = new Materia;
        $materia->clave_materia = $request->clave_materia;
        $materia->nombre = $request->nombre;
        $materia->imagen = $request->imagen;
        $materia->save();
        return $materia;
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        return $materia;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        $request->validate([
            'clave_materia' => 'required',
            'nombre' => 'required',
            'imagen' => 'nullable|string'
        ]);

        $materia = new Materia;
        $materia->clave_materia = $request->clave_materia;
        $materia->nombre = $request->nombre;
        $materia->imagen = $request->imagen;
        $materia->update();
        return $materia;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return [];
    }
}
