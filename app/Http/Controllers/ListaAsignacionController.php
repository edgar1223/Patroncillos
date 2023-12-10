<?php

namespace App\Http\Controllers;

use App\Models\ListaAsignacion;
use Illuminate\Http\Request;

class ListaAsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ListaAsignacion::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_lista' => 'required',
            'clave_alumno' => 'required',
            'clave_asignacion' => 'required',
            'estado' => 'nullable|string',
            'archivo' => 'nullable|string',
            'comentario' => 'nullable|string'
        ]);

        $listaAsignacion = new ListaAsignacion;
        $listaAsignacion->clave_lista = $request->clave_lista;
        $listaAsignacion->clave_alumno = $request->clave_alumno;
        $listaAsignacion->clave_asignacion = $request->clave_asignacion;
        $listaAsignacion->estado = $request->estado;
        $listaAsignacion->archivo = $request->archivo;
        $listaAsignacion->comentario = $request->comentario;
        $listaAsignacion->save();
        return $listaAsignacion;
    }

    /**
     * Display the specified resource.
     */
    public function show(ListaAsignacion $listaAsignacion)
    {
        return $listaAsignacion;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ListaAsignacion $listaAsignacion)
    {
        $request->validate([
            'clave_lista' => 'required',
            'clave_alumno' => 'required',
            'clave_asignacion' => 'required',
            'estado' => 'required',
            'archivo' => 'nullable|string',
            'comentario' => 'nullable|string'
        ]);

        $listaAsignacion = new ListaAsignacion;
        $listaAsignacion->clave_lista = $request->clave_lista;
        $listaAsignacion->clave_alumno = $request->clave_alumno;
        $listaAsignacion->clave_asignacion = $request->clave_asignacion;
        $listaAsignacion->estado = $request->estado;
        $listaAsignacion->archivo = $request->archivo;
        $listaAsignacion->comentario = $request->comentario;
        $listaAsignacion->update();
        return $listaAsignacion;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListaAsignacion $listaAsignacion)
    {
        $listaAsignacion->delete();
        return [];
    }
}
