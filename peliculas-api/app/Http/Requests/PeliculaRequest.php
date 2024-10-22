<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeliculaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|string', // Movie title
            'descripcion' => 'required|string', // Movie description
            'año' => 'required|integer|min:1888|max:2024', // Release year (adjust minimum and maximum as needed)
            'director' => 'required|string', // Director
            'calificacion' => 'required|decimal:3,2|min:0|max:10', // Rating (adjust min/max if needed)
            'disponible' => 'required|boolean', // Availability
            'fecha_estreno' => 'required|date', // Release date
            'generos' => 'required|array', // Genres (array of strings)
            'url_poster' => 'required|url', // Poster URL
        ];
    }
}
