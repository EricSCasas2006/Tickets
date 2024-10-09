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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('img');
            $table->string('status')->default('activo'); // Estado por defecto 'activo'

            $table->enum('tipo_solicitud', ['Mantenimiento y Soporte', 'Configuración y Entrega de Equipos']);
            $table->enum('equipo', ['Computador', 'Celular', 'Impresora', 'Otro']);
            
            $table->string('prioridad')->default('Media'); // Estado por defecto 'activo' // Semaforización de prioridades


            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
