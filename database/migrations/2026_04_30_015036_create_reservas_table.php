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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_cliente')
                ->constrained('clientes')
                ->cascadeOnDelete();

            $table->foreignId('id_cancha')
                ->constrained('canchas')
                ->cascadeOnDelete();

            $table->foreignId('id_horario')
                ->constrained('horarios')
                ->cascadeOnDelete();

            $table->foreignId('id_estado')
                ->constrained('estados')
                ->cascadeOnDelete();

            $table->date('fecha');

            $table->foreignId('id_user')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
