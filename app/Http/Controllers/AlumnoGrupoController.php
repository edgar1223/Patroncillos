<?php

namespace App\Http\Controllers;

use App\Models\Alumno_Grupo;
use Illuminate\Http\Request;

class AlumnoGrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Alumno_Grupo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_alumno' => 'required',
            'clave_grupo' => 'required'
        ]);

        $alumno_Grupo = new Alumno_Grupo;
        $alumno_Grupo->clave_alumno = $request->clave_alumno;
        $alumno_Grupo->clave_grupo = $request->clave_grupo;
        $alumno_Grupo->save();
        return $alumno_Grupo;
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno_Grupo $alumno_Grupo)
    {
        return $alumno_Grupo;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno_Grupo $alumno_Grupo)
    {
        $request->validate([
            'clave_alumno' => 'required',
            'clave_grupo' => 'required'
        ]);

        $alumno_Grupo = new Alumno_Grupo;
        $alumno_Grupo->clave_alumno = $request->clave_alumno;
        $alumno_Grupo->clave_grupo = $request->clave_grupo;
        $alumno_Grupo->update();
        return $alumno_Grupo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno_Grupo $alumno_Grupo)
    {
        $alumno_Grupo->delete();
        return [];
    }
}
