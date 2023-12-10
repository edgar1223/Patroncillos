<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lista_asignacions', function (Blueprint $table) {
            $table->string('clave_lista', 10)->primary();
            $table->string('clave_alumno', 10);
            $table->string('clave_asignacion', 10);
            $table->string('estado', 45);
            $table->string('archivo',100);
            $table->string('comentario', 45);
            $table->foreign('clave_alumno')
                ->references('clave_alumno')
                ->on('alumnos')
                ->onDelete('cascade');
            $table->foreign('clave_asignacion')
                ->references('clave_asignacion')
                ->on('asignacions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lista_asignacions');
    }
};
