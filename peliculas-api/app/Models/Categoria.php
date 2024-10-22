<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Pelicula;

//Relacion de uno a muchos con la tabla peliculas
class Categoria extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'activo', 'orden'];

    public function peliculas()
    {
        return $this->hasMany(Pelicula::class);
    }
}
