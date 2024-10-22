<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest; // Ensure this class exists in the specified namespace
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(RegisterRequest $request)
    {
        // La validación ya se realiza en el RegisterRequest, así que podemos crear el usuario directamente
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Opcional: Enviar un correo electrónico de verificación
        // Mail::to($user->email)->send(new WelcomeEmail($user));

        return response()->json([
            'message' => 'Usuario registrado exitosamente.'
        ], 201);
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            return response()->json([
                'token' => $request->user()->createToken($request->name)->plainTextToken,
                'message' => 'Success',
                'status' => true
            ]);
        }
        return response()->json([
            'message' => 'Unauthorized',
            'status' => false
        ], Response::HTTP_UNAUTHORIZED);
    }
}
