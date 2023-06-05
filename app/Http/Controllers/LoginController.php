<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{

    public function loginForm(){
        return view('auth.login');
    }

    public function login (Request $request){
        $credenciales = $request->only('login', 'password');
        if (Auth::attempt($credenciales)){
            return redirect()->intended(route('empresas.index'));
        }

        else {
            $error = "Usuario incorrecto";
            return view('auth.login', compact('error'));
        }
            return view('inicio.inicio');
    }

    public function logout(){
    Auth::logout();
    return view('inicio.inicio');
    }
}
