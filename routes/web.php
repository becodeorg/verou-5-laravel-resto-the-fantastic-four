<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
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

Route::get('/test', function () {return view('testing-p');})->name('test');
Route::get('/home', function () {
    return view('home.home');
});

Route::get('/login',[LoginController::class,'index'])->name('loginGet');
Route::post('/login', [LoginController::class, 'login'])->name('loginPost');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/menu',[MenuController::class,'index'])->name('menu');
Route::get('/reservation',[ReservationController::class,'index'])->name('reservation');

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
