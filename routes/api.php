<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ListaAsignacionController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\CriterioController;
use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\AlumnoGrupoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ActividadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('usuarios',UsuarioController::class);
Route::apiResource('profesores',ProfesorController::class);
Route::apiResource('materias',MateriaController::class);
Route::apiResource('listasAsignaciones',ListaAsignacionController::class);
Route::apiResource('grupos',GrupoController::class);
Route::apiResource('criterios',CriterioController::class);
Route::apiResource('calificaciones',CalificacionController::class);
Route::apiResource('asignaciones',AsignacionController::class);
Route::apiResource('alumnosGrupos',AlumnoGrupoController::class);
Route::apiResource('alumnos',AlumnoController::class);
Route::apiResource('actividades',ActividadController::class);