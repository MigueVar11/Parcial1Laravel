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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); // título de la película
            $table->text('descripcion'); // descripción de la película
            $table->integer('año'); // año de estreno
            $table->string('director'); // director
            $table->decimal('calificacion', 3, 2); // calificación (e.g. 8.50)
            $table->boolean('disponible'); // disponibilidad
            $table->date('fecha_estreno'); // fecha de estreno
            $table->json('generos'); // géneros
            $table->string('url_poster'); // URL del póster
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
