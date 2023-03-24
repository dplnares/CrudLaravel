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
        Schema::create('recursos', function (Blueprint $table) {
            $table->id();
            $table->string('codInterno', 10);
            $table->string('categoriaRecurso', 30);
            $table->string('marcaRecurso', 30);
            $table->string('modeloRecurso', 30);
            $table->string('descripcionRecurso', 30);
            $table->decimal('precioRef', 8,2);
            $table->integer('cantidadRecurso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
};
