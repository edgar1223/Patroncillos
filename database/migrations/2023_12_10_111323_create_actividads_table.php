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
        Schema::create('actividads', function (Blueprint $table) {
            $table->string('clave_actividad', 10)->primary();
            $table->string('clave_asignacion', 10);
            $table->string('titulo', 20);
            $table->string('descripcion', 45);
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
        Schema::dropIfExists('actividads');
    }
};
