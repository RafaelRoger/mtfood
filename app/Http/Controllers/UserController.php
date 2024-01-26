<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('pages.user-add');
    }

    public function show() {
        return view('pages.user-list');
    }
}
