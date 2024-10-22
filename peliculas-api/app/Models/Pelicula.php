<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;



//Relacion de uno a muchos con la tabla peliculas
class Pelicula extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'año', 'director', 'calificacion', 'disponible', 'fecha_estreno', 'generos', 'url_poster', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
