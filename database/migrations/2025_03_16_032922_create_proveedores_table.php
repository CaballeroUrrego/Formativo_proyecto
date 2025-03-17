<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('id_proveedor'); // Clave primaria autoincremental
            $table->string('nombre', 100); // Nombre del proveedor
            $table->string('contacto', 50); // Contacto
            $table->string('telefono', 20); // Teléfono
            $table->string('direccion', 150)->nullable(); // Dirección, puede ser nula
            $table->string('email', 100)->unique(); // Correo electrónico único
            $table->unsignedBigInteger('id_producto')->nullable(); // Clave foránea opcional
            $table->timestamps(); // Fechas de creación y actualización

            // Clave foránea
            $table->foreign('id_producto')->references('id_producto')->on('productos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
};
