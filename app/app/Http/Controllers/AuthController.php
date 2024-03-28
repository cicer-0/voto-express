<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('page.login');
    }

    public function login(Request $request)
    {
        // Obtener los datos del formulario
        $email = $request->input('email');
        $password = $request->input('password');

        // Buscar al usuario por su email
        $user = User::where('email', $email)->first();
        // echo($user);
        // Verificar si el usuario existe y la contraseña es correcta
        return redirect()->intended('/elections');
        // if ($user) {
        //     if ($password == $user->password) {
        //         // Contraseña correcta, iniciar sesión para el usuario
        //         // Esto es opcional dependiendo de cómo manejes las sesiones en tu aplicación
        //         // Aquí puedes establecer las sesiones manualmente si lo deseas
        //         // Ejemplo: session(['user_id' => $user->id]);

        //         // Redirigir al usuario a la página deseada después del inicio de sesión
        //     }
        // }

        return back()->withErrors(['email' => 'Estas credenciales no coinciden con nuestros registros.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
