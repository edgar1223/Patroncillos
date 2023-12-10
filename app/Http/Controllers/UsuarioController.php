<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clave_usuario' => 'required',
            'rol' => 'required',
            'correo' => 'required',
            'contrasenia' => 'required',
            'imagen' => 'required'
        ]);

        $usuario = new Usuario;
        $usuario->clave_usuario = $request->clave_usuario;
        $usuario->rol = $request->rol;
        $usuario->correo = $request->correo;
        $usuario->contrasenia = $request->contrasenia;
        $usuario->imagen = $request->imagen;
        $usuario->save();
        return $usuario;
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return $usuario;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'clave_usuario' => 'required',
            'rol' => 'required',
            'correo' => 'required',
            'contrasenia' => 'required',
            'imagen' => 'nullable|string'
        ]);

        $usuario = new Usuario;
        $usuario->clave_usuario = $request->clave_usuario;
        $usuario->rol = $request->rol;
        $usuario->correo = $request->correo;
        $usuario->contrasenia = $request->contrasenia;
        $usuario->imagen = $request->imagen;
        $usuario->update();
        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return [];
    }
}
