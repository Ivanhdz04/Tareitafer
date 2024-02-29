<?php

use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

session_start();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/logearse', [LoginController::class, 'logearse'])->name('logearse');
Route::get('/singUp', [RegisterController::class, 'index'])->name('singUp');
Route::post('/join', [RegisterController::class, 'join'])->name('join');
Route::get('/editUser', [EditController::class, 'index'])->name('editUser');
Route::post('/edittingUser', [EditController::class, 'edittingUser'])->name('edittingUser');
Route::get('/deleteUser', [DeleteController::class, 'index'])->name('deleteUser');
Route::post('/deleting', [DeleteController::class, 'deleting'])->name('deleting');
Route::post('/closeSession', [HomeController::class, 'closeSession'])->name('closeSession');

