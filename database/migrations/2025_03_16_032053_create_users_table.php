<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migración para la tabla 'users'
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_usuario'); // Clave primaria
            $table->string('nombre', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->unsignedBigInteger('id_rol');
            $table->timestamps();

            // Clave foránea
            $table->foreign('id_rol')->references('id_rol')->on('roles')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
