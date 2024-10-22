<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{
    //Crud de categorias
    public function index()
    {
        return response()->json(Categoria::all());
    }

    public function store(StoreCategoriaRequest $request)
    {
        $categoria = Categoria::create($request->validated());
        return response()->json($categoria, 201);
    }

    public function show($id)
    {
        //Buscar una categoria por id
        $categoria = Categoria::findOrFail($id);
        return response()->json($categoria);
    }

    public function update(UpdateCategoriaRequest $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->validated());
        return response()->json($categoria);
    }

    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return response()->json(null, 204);
    }
}
