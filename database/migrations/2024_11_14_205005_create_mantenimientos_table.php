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
    Schema::create('mantenimientos', function (Blueprint $table) {
      $table->id();
      $table->foreignId('id_equipo')->constrained('equipos'); // Esto es correcto
      $table->foreignId('id_responsable')->constrained('responsables'); // Esto es correcto

      $table->date('fecha_mantenimiento');
      $table->string('tipo_mantenimiento', 100);
      $table->text('descripcion');
      $table->decimal('costo', 10, 2);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('mantenimientos');
  }
};
