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
    Schema::create('equipos', function (Blueprint $table) {
      $table->id();
      $table->string('nombre', 100);
      $table->string('tipo', 50);
      $table->date('fecha_adquisicion');
      $table->enum('estado', ['Activo', 'Inactivo', 'En mantenimiento']);
      $table->string('imagen', 250)->nullable(); // Asegúrate de usar los paréntesis

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('equipos');
  }
};
