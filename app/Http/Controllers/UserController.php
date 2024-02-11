<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index() {
        $levels = Level::get();

        return view('pages.user-add', [
            'levels' => $levels
        ]);
    }

    public function store( Request $request ) {

        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'phone1' => 'max:13',
            'phone2' => 'max:13',
            'level' => 'required|numeric',
            'password' => ['required','confirmed', Rules\Password::defaults()]
        ]);

        if ($request->hasFile('profile_photo')) {
            $dir = $request->file('profile_photo')->store('img');
        }

        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'level' => $request->level,
            'profile_photo_path' => $dir ?? '',
            'password' => $request->password
        ]);

        event(new Registered($user));

        return redirect()->back()->with('message', 'Novo utilizador criado com sucesso.');
    }

    public function show() {
        $users = User::with('nivel')->get();

        return view('pages.user-list', [
            'users' => $users
        ]);
    }
}
