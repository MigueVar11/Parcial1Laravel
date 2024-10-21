<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta solicitud.
     */
    public function authorize(): bool
    {
        return true; // Permite a cualquier usuario hacer esta solicitud
    }

    /**
     * Obtiene las reglas de validación que se aplican a la solicitud.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email', // El campo email es requerido y debe ser un correo válido
            'password' => 'required|string|min:8', // El campo password es requerido, debe ser una cadena y tener al menos 8 caracteres
        ];
    }
}
