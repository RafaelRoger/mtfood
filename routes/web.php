<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::controller(Dashboard::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('add-new-user', 'index')->name('user.add');
        Route::get('list-users', 'show')->name('user.list');
    });

    Route::controller(StockController::class)->group(function () {
        Route::get('stock-in', 'indexStockIn')->name('stock.in');
        Route::post('stock-in', 'storeStockIn')->name('stock.in');
        Route::post('stock-in-update/{id}', 'updateProduct')->name('stock.in.update');
        Route::get('stock-in-delete/{id}', 'deleteEntry')->name('stock.in.delete');
        Route::get('stock-out', 'indexStockOut')->name('stock.out');
        Route::post('stock-out', 'deduce')->name('stock.out');
        Route::get('stock-in-view', 'stockInView')->name('stock.in.view');
        Route::get('stock-out-view', 'stockOutView')->name('stock.out.view');
    });
});
