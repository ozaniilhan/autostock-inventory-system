<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;

// Ana sayfa (kayıt/giriş ekranı)
Route::get('/', function () {
    return view('welcome');
});

// Dashboard → Yönetici paneli
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Kimlik doğrulama gerektiren rotalar
Route::middleware(['auth'])->group(function () {

    // Profil işlemleri
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ürünler
    Route::resource('products', ProductController::class);

    // Siparişler
    Route::resource('orders', OrderController::class);
    Route::patch('/orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
});

// Giriş-kayıt işlemleri için auth.php
require __DIR__.'/auth.php';
