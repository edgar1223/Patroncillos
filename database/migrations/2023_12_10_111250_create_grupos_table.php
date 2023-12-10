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
        Schema::create('grupos', function (Blueprint $table) {
            $table->string('clave_grupo', 10)->primary();
            $table->string('clave_profesor', 10);
            $table->string('clave_materia', 10);
            $table->foreign('clave_profesor')
                ->references('clave_profesor')
                ->on('profesors')
                ->onDelete('cascade');
            $table->foreign('clave_materia')
                ->references('clave_materia')
                ->on('materias')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
