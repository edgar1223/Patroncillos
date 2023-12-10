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
        Schema::create('alumno_grupos', function (Blueprint $table) {
            $table->string('clave_alumno', 10);
            $table->string('clave_grupo', 10);
            $table->foreign('clave_alumno')
                ->references('clave_alumno')
                ->on('alumnos')
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
        Schema::dropIfExists('alumno__grupos');
    }
};
