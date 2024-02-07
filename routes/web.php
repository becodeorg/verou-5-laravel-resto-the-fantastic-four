<?php

use App\Http\Controllers\BookingFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
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

Route::get('/test', function () {return view('testing-p',["reservations"=>Reservation::all()]);})->name('test');

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

Route::get('/reservations',[ReservationController::class,'index'])->middleware(['auth', 'verified'])->name('reservations');

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');




Route::get('bookingoffer', [BookingFormController::class,'create'])->name('viewBooking');
Route::get('bookingoffer/{day}', [BookingFormController::class,'view'])->name('viewBookingDay');
Route::post('bookingoffer', [BookingFormController::class,'store'])->name('booking');
// Route::post('bookingoffer', 'yourController@store')->middleware('MiddlewareName');
