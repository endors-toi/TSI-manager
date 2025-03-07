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
        Schema::create('profesor_propuestas', function (Blueprint $table) {
            //PRIMARY KEYS
            $table->string('propuesta_id');
            $table->string('profesor_rut');
            $table->primary(['propuesta_id', 'profesor_rut']);

            //OTROS CAMPOS
            $table->date('fecha');
            $table->time('hora');
            $table->text('comentario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor_propuestas');
    }
};
