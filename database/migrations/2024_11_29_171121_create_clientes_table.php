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
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('id_cliente', 20)->primary();   // Código manual
            $table->string('nombre', 100);                  // Nombre del cliente
            $table->text('direccion')->nullable();         // Dirección del cliente
            $table->string('telefono', 15)->nullable();    // Teléfono del cliente
            $table->string('email', 100)->unique();        // Email del cliente
            $table->timestamp('fecha_registro')->useCurrent(); // Fecha de registro
            $table->timestamps();                          // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};