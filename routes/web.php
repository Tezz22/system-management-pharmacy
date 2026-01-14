<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::get('/', fn () => redirect()->route('login'));

Route::middleware(['auth'])->group(function () {

    // ✅ Dashboard utama (Breeze default butuh name: dashboard)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // (optional) kalau lu masih mau pake name dashboard.index juga
    // Route::get('/dashboard-index', [DashboardController::class, 'index'])->name('dashboard.index');

    // ✅ Profile bawaan Breeze (biarin, ga ganggu)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
