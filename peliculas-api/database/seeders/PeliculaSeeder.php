<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelicula;

class PeliculaSeeder extends Seeder
{
    /**
     * Ejecuta el seeder para insertar datos falsos en la base de datos.
     *
     * @return void
     */
    public function run(): void
    {
        // Crear 10 registros falsos en la tabla peliculas usando el Factory
        Pelicula::factory(10)->create();
    }
}
