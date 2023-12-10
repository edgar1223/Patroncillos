<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Grupo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_grupo' => 'required',
            'clave_profesor' => 'required',
            'clave_materia' => 'required'
        ]);

        $grupo = new Grupo;
        $grupo->clave_grupo = $request->clave_grupo;
        $grupo->clave_profesor = $request->clave_profesor;
        $grupo->clave_materia = $request->clave_materia;
        $grupo->save();
        return $grupo;
    }

    /**
     * Display the specified resource.
     */
    public function show(Grupo $grupo)
    {
        return $grupo;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grupo $grupo)
    {
        $request->validate([
            'clave_grupo' => 'required',
            'clave_profesor' => 'required',
            'clave_materia' => 'required'
        ]);

        $grupo = new Grupo;
        $grupo->clave_grupo = $request->clave_grupo;
        $grupo->clave_profesor = $request->clave_profesor;
        $grupo->clave_materia = $request->clave_materia;
        $grupo->update();
        return $grupo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grupo $grupo)
    {
        $grupo->delete();
        return [];
    }
}
