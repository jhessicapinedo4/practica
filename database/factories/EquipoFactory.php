<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'nombre' => fake()->word(),  // Genera un nombre aleatorio
      'tipo' => fake()->word(),
      'fecha_adquisicion' => fake()->date(),
      'estado' => fake()->randomElement(['Activo', 'Inactivo', 'En mantenimiento']),

    ];
  }
}
