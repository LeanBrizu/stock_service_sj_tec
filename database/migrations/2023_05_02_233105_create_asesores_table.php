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
        Schema::create('asesores', function (Blueprint $table) {
            $table->comment('Esta tabla corresponde al personal inmobiliario de asesores. El estado en 1 representa que
            el personal se encuentra activo. 0, inactivo.');
            $table->id();
            $table->string('nombre_apellido', 100);
            $table->string('email', 50);
            $table->boolean('estado', 1); //1 representa a un colaborador activo. 0, inactivo.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asesores');
    }
};
