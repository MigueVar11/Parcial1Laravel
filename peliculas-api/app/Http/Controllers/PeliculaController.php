<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeliculaRequest;
use App\Http\Requests\UpdatePeliculaRequest;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Muestra una lista de todas las películas.
     */
    public function index()
    {
        // Retorna todas las películas

        return response()->json(Pelicula::all());
    }

    /**
     * Almacena una nueva película en la base de datos.
     */
    public function store(StorePeliculaRequest $request)
    {
        // Crea la película con los datos validados automáticamente por StorePeliculaRequest
        $pelicula = Pelicula::create($request->validated());

        return response()->json($pelicula, 201);
    }

    /**
     * Muestra una película específica.
     */
    public function show($id)
    {
        // Busca la película por ID y la retorna
        $pelicula = Pelicula::findOrFail($id);
        return response()->json($pelicula);
    }

    /**
     * Actualiza una película existente en la base de datos.
     */
    public function update(UpdatePeliculaRequest $request, $id)
    {
        // Busca la película por ID y actualiza sus datos
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->update($request->validated());

        return response()->json($pelicula);
    }

    /**
     * Elimina una película de la base de datos.
     */
    public function destroy($id)
    {
        // Busca la película por ID y la elimina
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();

        return response()->json(null, 204);
    }
}
