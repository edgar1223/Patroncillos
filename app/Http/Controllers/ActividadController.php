<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Actividad::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_actividad' => 'required',
            'clave_asignacion' => 'required',
            'titulo' => 'required',
            'descripcion' => 'nullable|string'
        ]);

        $actividad = new Actividad;
        $actividad->clave_actividad = $request->clave_actividad;
        $actividad->clave_asignacion = $request->clave_asignacion;
        $actividad->titulo = $request->titulo;
        $actividad->descripcion = $request->descripcion;
        $actividad->save();
        return $actividad;
    }

    /**
     * Display the specified resource.
     */
    public function show(Actividad $actividad)
    {
        return $actividad;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actividad $actividad)
    {
        $request->validate([
            'clave_actividad' => 'required',
            'clave_asignacion' => 'required',
            'titulo' => 'required',
            'descripcion' => 'nullable|string'
        ]);

        $actividad = new Actividad;
        $actividad->clave_actividad = $request->clave_actividad;
        $actividad->clave_asignacion = $request->clave_asignacion;
        $actividad->titulo = $request->titulo;
        $actividad->descripcion = $request->descripcion;
        $actividad->update();
        return $actividad;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return [];
    }
}
