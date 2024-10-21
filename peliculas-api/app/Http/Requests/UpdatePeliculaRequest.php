<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePeliculaRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     */
    public function authorize(): bool
    {
        return true; 
    }

    /**
     * Reglas de validación para la actualización de una película.
     */
    public function rules(): array
    {
        return [
            'titulo' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|required|string',
            'año' => 'sometimes|required|integer|min:1900|max:' . date('Y'),
            'director' => 'sometimes|required|string|max:255',
            'calificacion' => 'sometimes|required|numeric|between:0,10',
            'disponible' => 'sometimes|required|boolean',
            'fecha_estreno' => 'sometimes|required|date',
            'generos' => 'sometimes|required|json',
            'url_poster' => 'sometimes|required|url',
        ];
    }

    /**
     * Mensajes de error personalizados (opcional).
     */
    public function messages(): array
    {
        return [
            'titulo.sometimes' => 'El título es obligatorio si se proporciona.',
            'año.min' => 'El año debe ser mayor o igual a 1900.',
            // Puedes agregar más mensajes personalizados aquí si lo deseas
        ];
    }
}

