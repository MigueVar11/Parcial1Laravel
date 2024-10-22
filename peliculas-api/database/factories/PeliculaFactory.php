<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Pelicula;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelicula>
 */
class PeliculaFactory extends Factory
{
    /**
     * El nombre del modelo asociado a este factory.
     *
     * @var string
     */
    protected $model = Pelicula::class;

    /**
     * Define el estado por defecto del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3), // Título de la película
            'descripcion' => $this->faker->paragraph(), // Descripción
            'año' => $this->faker->year(), // Año de lanzamiento
            'director' => $this->faker->name(), // Nombre del director
            'calificacion' => $this->faker->randomFloat(2, 0, 10), // Calificación entre 0 y 10
            'disponible' => $this->faker->boolean(), // Disponibilidad
            'fecha_estreno' => $this->faker->date(), // Fecha de estreno
            'generos' => json_encode($this->faker->words(3)), // Géneros en formato JSON
            'url_poster' => $this->faker->imageUrl(), // URL de un póster falso
            'categoria_id' => Categoria::factory(),
        ];
    }
}

