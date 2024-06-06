<?php

use App\Http\Controllers\BookingOlahragaController;
use App\Http\Controllers\KategoriController; // Menggunakan konvensi TitleCase
use App\Http\Controllers\OlahragaController; // Menggunakan konvensi TitleCase
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\ForgotPasswordController;
// use App\Http\Controllers\KategorilapanganController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('olahraga', OlahragaController::class);
Route::resource('kategori', kategoriController::class);
//  Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);
// // Menambahkan alias untuk rute reset password
// Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

