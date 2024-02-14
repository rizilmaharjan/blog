<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');


Route::get('users',[UserController::class, 'index'])->name('users.index');

require __DIR__.'/auth.php';
