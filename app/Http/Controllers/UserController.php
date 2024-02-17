<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index() {
        // AUTHORIZATION
        $this->authorize('admin');

        $levels = Level::get();

        return view('pages.user-add', [
            'levels' => $levels
        ]);
    }

    public function store( Request $request ) {
        // AUTHORIZATION
        $this->authorize('admin');

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
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($user));

        return redirect()->back()->with('message', 'Novo utilizador criado com sucesso.');
    }

    public function show() {
        // AUTHORIZATION
        $this->authorize('admin');

        $users = User::with('nivel')->get();

        return view('pages.user-list', [
            'users' => $users
        ]);
    }

    public function invokeUpdateTemplate( $id ) {
        $this->authorize('admin');

        $user = User::findOrFail( $id );
        $levels = Level::get();

        return view('pages.user-update', [
            'user' => $user,
            'levels' => $levels
        ]);
    }

    public function update( Request $request, $id ) {
        // AUTHORIZATION
        $this->authorize('admin');

        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250',
            'phone1' => 'max:13',
            'phone2' => 'max:13'
        ]);

        if ($request->hasFile('profile_photo')) {
            $dir = $request->file('profile_photo')->store('img');
        }

        $user = User::findOrFail($id);

        if (!empty($request->old_password) || !empty($request->new_password)) {
            if (password_verify($request->old_password, $user->password)) 
                $password = Hash::make($request->new_password);
            else
                return redirect()->back()->withErrors('Senha antiga não confere!');
        } else {
            $password = $user->password;
        }

        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone1 = $request->phone1;
        $user->phone2 = $request->phone2;
        $user->level = $request->level ?? $user->level;
        $user->profile_photo_path = $dir ?? $user->profile_photo_path;
        $user->password = $password;
        $user->save();

        return redirect()->back()->with('message', 'Utilizador actualizado com sucesso.');
    }

    public function delete( $id ) {
        $this->authorize('admin');

        $user = User::findOrFail( $id );
        if ($user->id != Auth::user()->id) 
            $user->delete();

        return redirect()->back();
    }
}
