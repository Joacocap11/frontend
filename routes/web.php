<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::resource('tareas', TareaController::class);
    Route::resource('categorias', CategoriaController::class)->except(['show']);
    Route::resource('comentarios', ComentarioController::class)->except(['show']);
});
