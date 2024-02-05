<?php

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

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/menu',[MenuController::class,'index'])->name('menu');
Route::get('/reservation',[ReservationController::class,'index'])->name('reservation');
Route::get('/dashboard',[LoginController::class,'admin'])->middleware(['auth', 'verified'])->name('dashboard');
