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
})->name('contact');

Route::get('/login',[LoginController::class,'index'])->name('loginGet');
Route::post('/login', [LoginController::class, 'login'])->name('loginPost');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/menu',[MenuController::class,'index'])->name('menu');


Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/reservations',[DashboardController::class,'reservations'])->middleware(['auth', 'verified'])->name('dashboard-reservations');
Route::get('/dashboard/menu', [DashboardController::class, 'editMenu'])->middleware(['auth', 'verified'])->name('editMenu');
Route::get('dashboard/menu/edit-{id}',[DashboardController::class, 'edit'])->middleware(['auth', 'verified'])->name('editItem');
Route::delete('dashboard/menu/delete-{id}', [DashboardController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteItem');
Route::post('dashboard/menu/update', [DashboardController::class, 'update'])->middleware(['auth','verified'])->name('update-menu');


Route::get('reservations', [ReservationController::class,'create'])->name('reservations');
Route::get('/reservations/{day}', [ReservationController::class,'view'])->name('viewReservation');
Route::post('/reservations', [ReservationController::class,'store'])->name('reservating');
Route::post('/booked', [ReservationController::class,'success'])->name('booked');