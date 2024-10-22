<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelicula;
use App\Models\Categoria;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Verificar que existan categorías en la base de datos
        if (Categoria::count() > 0) {
            // Crear 20 películas, asignando una categoría aleatoria a cada una
            Pelicula::factory(20)->create([
                'categoria_id' => Categoria::inRandomOrder()->first()->id, // Categorias aleatorias
            ]);
        } else {
            // Se muestra un mensaje en caso de que no haya categorías en la base de datos
            echo "No hay categorías en la base de datos.";
        }
    }
}
