<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ejecutar primero el seeder de categorías
        $this->call(CategoriasSeeder::class);

        // Luego ejecutar el seeder de películas
        $this->call(PeliculasSeeder::class);
    }
}
