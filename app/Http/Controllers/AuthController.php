<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('pages.sign-in');
    }

    public function auth( Request $request ) {
        $request->validate([
            'username'          => 'required|email',
            'password'          => 'required'
        ], [
            'username.required' => 'Preencha o campo Email',
            'username.email'    => 'Email invalido',
            'password.required' => 'Preencha o campo Password',
        ]);

        //OBTEM OS DADOS DO FORMULARIO
        $credentials = [
            'email'    => $request->username,
            'password' => $request->password,
        ];

        //VALIDA OS DADOS NA BASE DE DADOS
        if (Auth::attempt($credentials, ($request->get('remember') == 'on') ? true : false)) {
            return redirect()->intended(route('dashboard'));
        }
        return redirect()->back()->with('message', 'Email ou Senha incorretos');
    }
}
