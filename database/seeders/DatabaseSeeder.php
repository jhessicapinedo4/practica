<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Equipo;
use App\Models\Responsable;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678'),
        ]);

    Equipo::factory(10)->create();
    Responsable::factory(10)->create();
    }
}
