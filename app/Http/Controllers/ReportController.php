<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    //
    public function reportView(string $param)
    {

        switch ($param) {
            case 'today':
                $outlets = Outlet::with('entry')
                    ->whereDate('created_at', Carbon::today())
                    ->get();
                break;
            case 'week';
                $outlets = Outlet::with('entry')
                    ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                    ->get();
                break;
            default:
                abort(404, 'Pagina não encontrada');
        }


        return view('pages.report', [
            'outlets' => $outlets
        ]);
    }
}
