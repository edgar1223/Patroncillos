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
        Schema::create('asignacions', function (Blueprint $table) {
            $table->string('clave_asignacion', 10)->primary();
            $table->string('clave_grupo', 10);
            $table->string('clave_profesor', 10);
            $table->string('titulo', 20);
            $table->string('descripcion', 45);
            $table->float('totalAsignacion');
            $table->datetime('fechaApertura');
            $table->datetime('fechaCierre');
            $table->foreign('clave_profesor')
                ->references('clave_profesor')
                ->on('profesors')
                ->onDelete('cascade');
            $table->foreign('clave_grupo')
                ->references('clave_grupo')
                ->on('grupos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacions');
    }
};
