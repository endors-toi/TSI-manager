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
        Schema::create('propuestas', function (Blueprint $table) {
            //CAMPOS
            $table->integer('id')->primary();
            $table->date('fecha');
            $table->string('documento',100);
            $table->tinyInteger('estado');
            $table->string('posicion',10);

            //FK
            $table->string('estudiante_rut');
            $table->foreign('estudiante_rut')->references('rut')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propuestas');
    }
};
