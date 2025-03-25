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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            // - "ForeignId()" crea una columna clave foranea.
            // - "->constrained()" Agrega una restriccion de clave foranea, Laravel asume que proveedor_id hace referencia a la columna id en la tabla proveedors.
            // - "->onDelete('cascade')" Si un proveedor es eliminado, todos los productos asociados también se eliminarán automáticamente.
            $table->foreignId('proveedor_id')->constrained()->onDelete('cascade');
            $table->string('fecha_compra');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
