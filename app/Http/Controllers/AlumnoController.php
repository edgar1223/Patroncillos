<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Alumno::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_alumno' => 'required',
            'nombre' => 'required',
            'clave_usuario' => 'required'
        ]);

        $alumno = new Alumno;
        $alumno->clave_alumno = $request->clave_alumno;
        $alumno->nombre = $request->nombre;
        $alumno->correo = $request->clave_usuario;
        $alumno->save();
        return $alumno;
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return $alumno;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'clave_alumno' => 'required',
            'nombre' => 'required',
            'clave_usuario' => 'required'
        ]);

        $alumno = new Alumno;
        $alumno->clave_alumno = $request->clave_alumno;
        $alumno->nombre = $request->nombre;
        $alumno->correo = $request->clave_usuario;
        $alumno->update();
        return $alumno;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return [];
    }
}
