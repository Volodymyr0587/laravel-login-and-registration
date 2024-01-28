<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;

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
    return view('pages.home');
})->name('home');

// Show Register/Create Form
Route::get('/register', [UserController::class, 'register'])->name('user.register');

// Create New User
Route::post('/create', [UserController::class, 'store'])->name('user.store');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('user.login');

// Log In User
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('user.authenticate');

// Show Settings Form
Route::get('/settings', [UserController::class, 'settings'])->name('user.settings');

// Update user
Route::put('/update/{user}', [UserController::class, 'update'])->name('user.update');
