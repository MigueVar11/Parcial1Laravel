<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeliculaRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación para la creación de una película.
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'año' => 'required|integer',
            'director' => 'required|string|max:255',
            'calificacion' => 'required|numeric|between:0,10',
            'disponible' => 'required|boolean',
            'fecha_estreno' => 'required|date',
            'generos' => 'required|json',
            'url_poster' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id', // Validar clave foránea
        ];
    }

    /**
     * Mensajes de error personalizados (opcional).
     */
    public function messages(): array
    {
        return [
            'titulo.required' => 'El título es obligatorio.',
            'año.min' => 'El año debe ser mayor o igual a 1900.',
            // Puedes agregar más mensajes personalizados aquí si lo deseas
        ];
    }
}

