<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responsable>
 */
class ResponsableFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'nombre' => fake()->name(),  // Genera un nombre completo aleatorio
      'cargo' =>
      fake()->numerify('#########'),  // 
      'telefono' => fake()->phoneNumber(),  // 
      'correo' => fake()->email(),
    ];
  }
}
