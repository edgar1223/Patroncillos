<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Calificacion::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_calificacion' => 'required',
            'clave_lista' => 'required',
            'calificacion' => 'required'
        ]);

        $calificacion = new calificacion;
        $calificacion->clave_calificacion = $request->clave_calificacion;
        $calificacion->clave_lista = $request->clave_lista;
        $calificacion->calificacion = $request->calificacion;
        $calificacion->save();
        return $calificacion;
    }

    /**
     * Display the specified resource.
     */
    public function show(Calificacion $calificacion)
    {
        return $calificacion;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calificacion $calificacion)
    {
        $request->validate([
            'clave_calificacion' => 'required',
            'clave_lista' => 'required',
            'calificacion' => 'required'
        ]);

        $calificacion = new calificacion;
        $calificacion->clave_calificacion = $request->clave_calificacion;
        $calificacion->clave_lista = $request->clave_lista;
        $calificacion->calificacion = $request->calificacion;
        $calificacion->update();
        return $calificacion;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calificacion $calificacion)
    {
        $calificacion->delete();
        return [];
    }
}
