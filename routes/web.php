<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderB1Controller;
use App\Http\Controllers\StationeryController;
use App\Http\Controllers\TableBetweenController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VaccineController;
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


Route::middleware(['auth'])->group(function () {
    // HOME

    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('logout', [HomeController::class, 'logout'])->name('home.logout');

    // VIEW TABLES

    Route::get('stationery/{date}', [StationeryController::class, 'show'])->name('stationery.show');
    Route::post('stationery/export', [StationeryController::class, 'export'])->name('stationery.export');
    Route::post('stationery/import', [StationeryController::class, 'import'])->name('stationery.import');

    Route::get('orderb1/{date}', [OrderB1Controller::class, 'show'])->name('orderb1.show');
    Route::post('orderb1/export', [OrderB1Controller::class, 'export'])->name('orderb1.export');
    Route::post('orderb1/import', [OrderB1Controller::class, 'import'])->name('orderb1.import');

    Route::get('vaccine/{date}', [VaccineController::class, 'show'])->name('vaccine.show');
    Route::post('vaccine/update', [VaccineController::class, 'update'])->name('vaccine.update');
    Route::post('vaccine/export', [VaccineController::class, 'export'])->name('vaccine.export');
    Route::post('vaccine/import', [VaccineController::class, 'import'])->name('vaccine.import');

    // ONLY TABLES

    Route::prefix('table')
    ->group(function () {
        Route::get('coffee/{date}', [TableController::class, 'coffee'])->name('coffee.index');
        Route::get('stationery/{date}', [TableController::class, 'stationery'])->name('stationery.index');
        Route::get('meter/{date}', [TableController::class, 'meter'])->name('meter.index');
    });

    Route::prefix('table_between')
    ->group(function () {
        Route::get('coffee/{date_from}/{date_to}', [TableBetweenController::class, 'coffee'])->name('coffee.index');
        Route::get('stationery/{date_from}/{date_to}', [TableBetweenController::class, 'stationery'])->name('stationery.index');
        Route::get('meter/{date_from}/{date_to}', [TableBetweenController::class, 'meter'])->name('meter.index');
    });
});

Route::middleware(['guest'])->group( function ( ) {
    Route::get('login', [LoginController::class, 'index'])->name('login.index');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
});

Route::get('test', [TestController::class, 'index'])->name('test.index');
Route::post('test', [TestController::class, 'import'])->name('test.import');
