<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Asignacion::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_asignacion' => 'required',
            'clave_grupo' => 'required',
            'clave_profesor' => 'required',
            'titulo' => 'required',
            'descripcion' => 'nullable|string',
            'totalAsignacion' => 'required',
            'fechaApertura' => 'nullable|datetime',
            'fechaCierre' => 'nullable|datetime'
        ]);

        $asignacion = new asignacion;
        $asignacion->clave_asignacion = $request->clave_asignacion;
        $asignacion->clave_grupo = $request->clave_grupo;
        $asignacion->clave_profesor = $request->clave_profesor;
        $asignacion->titulo = $request->titulo;
        $asignacion->descripcion = $request->descripcion;
        $asignacion->totalAsignacion = $request->totalAsignacion;
        $asignacion->fechaApertura = $request->fechaApertura;
        $asignacion->fechaCierre = $request->fechaCierre;

        $asignacion->save();
        return $asignacion;
    }

    /**
     * Display the specified resource.
     */
    public function show(Asignacion $asignacion)
    {
        return $asignacion;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asignacion $asignacion)
    {
        $request->validate([
            'clave_asignacion' => 'required',
            'clave_grupo' => 'required',
            'clave_profesor' => 'required',
            'titulo' => 'required',
            'descripcion' => 'nullable|string',
            'totalAsignacion' => 'required',
            'fechaApertura' => 'nullable|datetime',
            'fechaCierre' => 'nullable|datetime'
        ]);

        $asignacion = new asignacion;
        $asignacion->clave_asignacion = $request->clave_asignacion;
        $asignacion->clave_grupo = $request->clave_grupo;
        $asignacion->clave_profesor = $request->clave_profesor;
        $asignacion->titulo = $request->titulo;
        $asignacion->descripcion = $request->descripcion;
        $asignacion->totalAsignacion = $request->totalAsignacion;
        $asignacion->fechaApertura = $request->fechaApertura;
        $asignacion->fechaCierre = $request->fechaCierre;

        $asignacion->update();
        return $asignacion;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignacion $asignacion)
    {
        $asignacion->delete();
        return [];
    }
}
