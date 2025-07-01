<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function login(Request $request) {
        $response = Http::post(env('AUTH_API_URL') . '/api/login', $request->only('email', 'password'));
        if ($response->successful()) {
            Session::put('token', $response['token']);
            Session::put('user', $response['user']);
            return redirect()->route('tareas.index');
        }
        return back()->with('error', 'Credenciales incorrectas');
    }

    public function register(Request $request) {
        $response = Http::post(env('AUTH_API_URL') . '/api/register', $request->all());
        return $response->successful()
            ? redirect()->route('login.form')->with('success', 'Registrado correctamente')
            : back()->with('error', 'Error al registrar');
    }

    public function logout() {
        Session::flush();
        return redirect()->route('login.form');
    }
}
