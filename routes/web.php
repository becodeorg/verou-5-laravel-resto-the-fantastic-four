<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Models\Reservation;
use App\Models\Timeslot;
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


Route::get('/home', function () {
    return view('home.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/login',[LoginController::class,'index'])->name('loginGet');
Route::post('/login', [LoginController::class, 'login'])->name('loginPost');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/menu',[MenuController::class,'index'])->name('menu');
Route::get('/menu/edit', [MenuController::class, 'edit'])->middleware(['auth', 'verified'])->name('editMenu');

// Route::get('/reservations',[ReservationController::class,'index'])->middleware(['auth', 'verified'])->name('reservations');

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/reservations', function () {return view('reservations.index',["reservations"=>Reservation::all()]);})->name('reservations');
// Route::get('reservations', [ReservationController::class,'create'])->name('reservations');
Route::get('/reservations/{day}', [ReservationController::class,'view'])->name('viewReservation');
Route::post('/reservations', [ReservationController::class,'store'])->name('reservating');
Route::post('/booked', [ReservationController::class,'success'])->name('booked');
// Route::post('bookingoffer', 'yourController@store')->middleware('MiddlewareName');
