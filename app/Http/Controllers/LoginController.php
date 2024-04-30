<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        // Obtener las credenciales del formulario
        $credentials = $request->only('username', 'password');

        // Validar las credenciales
        if(!Auth::attempt($credentials)){
            return redirect()->to('/login')->withErrors('Algun dato esta mal revisa tus credenciales');
        }
        
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Redirigir al usuario a la página de inicio y pasar el usuario con el tipo a la vista
        return redirect('/home')->with('user', $user);
    }
}


