<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migración para la tabla 'ventas'
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_venta');
            $table->unsignedBigInteger('id_usuario'); // Debe coincidir con la clave primaria
            $table->decimal('total', 10, 2);
            $table->timestamps();

            // Clave foránea que hace referencia a 'id_usuario' en 'users'
            $table->foreign('id_usuario')
                ->references('id_usuario')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
