<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('dashboard');

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', LogoutController::class)->name('logout');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource(
    'categories',
    CategoryController::class
);
Route::resource(
    'tasks',
    CategoryController::class
);
