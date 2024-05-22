<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'rol' => 'required|string|max:255',
            'documento' => 'required|string|unique:users,documento',
            'name' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo_electronico' => 'required|string|email|max:255|unique:users,correo_electronico',
            'contraseña' => 'required|string|min:8',
            'telefono' => 'required|string|max:255',
            'tipo_etapa' => 'required|string|max:255',
            'programa_formacion' => 'required|string|max:255',
            'ficha' => 'required|string|max:255',
            'instructor_asignado' => 'required|string|max:255',
        ]);

        // Crear el nuevo usuario
        User::create([
            'rol' => $validatedData['rol'],
            'documento' => $validatedData['documento'],
            'name' => $validatedData['name'],
            'apellidos' => $validatedData['apellidos'],
            'correo_electronico' => $validatedData['correo_electronico'],
            'contraseña' => bcrypt($validatedData['contraseña']),
            'telefono' => $validatedData['telefono'],
            'tipo_etapa' => $validatedData['tipo_etapa'],
            'programa_formacion' => $validatedData['programa_formacion'],
            'ficha' => $validatedData['ficha'],
            'instructor_asignado' => $validatedData['instructor_asignado'],
        ]);
        
        
        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('user.index');
    }
}
