<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\ReportController;
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



Route::prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {

        Route::controller(Dashboard::class)->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
        });

        Route::controller(UserController::class)->group(function () {
            Route::get('add-new-user', 'index')->name('user.add');
            Route::post('add-new-user', 'store')->name('user.add');
            Route::get('list-users', 'show')->name('user.list');
            Route::get('delete-user/{id}', 'delete')->name('user.delete');
            Route::get('update-user/{id}', 'invokeUpdateTemplate')->name('user.update');
            Route::post('update-user/{id}', 'update')->name('user.update');
        });

        Route::controller(StockController::class)->group(function () {
            Route::get('stock-in', 'indexStockIn')->name('stock.in');
            Route::post('stock-in', 'storeStockIn')->name('stock.in');
            Route::post('stock-in-update/{id}', 'updateProduct')->name('stock.in.update');
            Route::get('stock-in-delete/{id}', 'deleteEntry')->name('stock.in.delete');
            Route::get('stock-out', 'indexStockOut')->name('stock.out');
            Route::get('stock-out-deduce', 'deduce')->name('stock.out.deduce');

            Route::get('sold-out', 'soldOut')->name('soldout');
            Route::post('sold-out/{id}', 'addQuantity')->name('soldout.add');

            Route::post('add-on-stock-out-list', 'addOnList')->name('stock.out.add');
            Route::get('empty-list', 'emptyList')->name('stock.out.empty-list');
            Route::get('remove-product-list/{id}', 'removeProduct')->name('stock.out.remove-product');

            Route::get('stock-in-view', 'stockInView')->name('stock.in.view');
            Route::get('stock-out-view', 'stockOutView')->name('stock.out.view');

            Route::get('invoice', 'invoice')->name('admin.invoice');
            Route::get('download/{id}', 'downloadInvoice')->name('admin.download-invoice');
        });

        Route::controller(ReportController::class)->group(function () {
            Route::get('report/{param}', 'reportView')->name('report.view');
        });

        Route::controller(AuthController::class)->group( function () {
            Route::get('logout', 'logout')->name('admin.logout');
        });
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/', 'index')->name('auth.login');
        Route::post('/', 'auth')->name('auth.login');
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'index')->name('login');
        Route::get('/register', 'index')->name('auth.register');
        Route::post('/register', 'index')->name('auth.register');
    });
});