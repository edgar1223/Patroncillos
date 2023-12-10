<?php

namespace App\Http\Controllers;

use App\Models\Criterio;
use Illuminate\Http\Request;

class CriterioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Criterio::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_criterio' => 'required',
            'clave_actividad' => 'required',
            'procentaje' => 'required'
        ]);

        $criterio = new Criterio;
        $criterio->clave_criterio = $request->clave_criterio;
        $criterio->clave_actividad = $request->clave_actividad;
        $criterio->procentaje = $request->procentaje;
        $criterio->save();
        return $criterio;
    }

    /**
     * Display the specified resource.
     */
    public function show(Criterio $criterio)
    {
        return $criterio;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Criterio $criterio)
    {
        $request->validate([
            'clave_criterio' => 'required',
            'clave_actividad' => 'required',
            'procentaje' => 'required'
        ]);

        $criterio = new Criterio;
        $criterio->clave_criterio = $request->clave_criterio;
        $criterio->clave_actividad = $request->clave_actividad;
        $criterio->procentaje = $request->procentaje;
        $criterio->update();
        return $criterio;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Criterio $criterio)
    {
        $criterio->delete();
        return [];
    }
}
