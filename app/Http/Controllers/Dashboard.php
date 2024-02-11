<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Outlet;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $users = User::count();
        $currentMonth = Carbon::now()->month;
        $outlets = Outlet::whereMonth('created_at', $currentMonth)->count();
        $entries = Entry::count();
        $totalPrice = Outlet::with('entry')->get()->sum(function ($outlet) {
            return $outlet->entry->sum('price');
        });

        return view('pages.index', [
            'outlets' => $outlets,
            'entries' => $entries,
            'users' => $users,
            'totalPrice' => $totalPrice
        ]);
    }
}
