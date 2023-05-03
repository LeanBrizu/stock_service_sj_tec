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
        Schema::create('mensajes_contacto', function (Blueprint $table) {
            $table->comment('Esta tabla contiene la información recibida del formulario de contacto (inmobiliario).');
            $table->id();
            $table->string('nombre_apellido', 100);
            $table->string('email', 50);
            $table->string('telefono', 10);
            $table->longText('mensaje', 500);
            $table->string('operacion', 10);
            $table->decimal('precio', $precision = 10, $scale = 2);
            $table->string('tipo_contacto', 20);
            $table->string('asesor_seleccionado', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensajes_contacto');
    }
};
