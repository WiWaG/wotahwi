<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('/rooms', RoomController::class)->only('index', 'show');

Route::group(['middleware' =>['auth', 'role:user|super-admin']], function () {
    Route::get('reservations/create/{room?}', [ReservationController::class, 'create']);
    Route::resource('reservations', ReservationController::class)->except('create');
});

//-- Admin dashboard routes
Route::group(['middleware' =>['auth', 'role:admin|super-admin'], 'prefix' => 'admin/dashboard', 'as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    //-- Admin dashboard rooms routes
    Route::get('/rooms', [AdminController::class, 'roomsList'])->name('rooms.list');
    Route::resource('/rooms', RoomController::class)->except('index', 'show');

    //-- Admin dashboard reservations routes
    Route::get('/reservations', [AdminController::class, 'reservationsList'])->name('reservations.list');
    Route::resource('/reservations', ReservationController::class)->except('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
