<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Главная страница
Route::get('/', [HomeController::class, 'index'])->name('home');

// Страницы форм
Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');

// Обработка данных
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Выход
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Пользователь
Route::get('/dashboard', [OrderController::class, 'index'])->name('users.dashboard');
Route::get('/order/create', [OrderController::class, 'create'])->name('users.order.create');
Route::post('/order/store', [OrderController::class, 'store'])->name('users.order.store');

// Админка
Route::get('/admin/orders', [AdminController::class, 'orders'])->name('admin.orders');
Route::post('/admin/order/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.order.status');
