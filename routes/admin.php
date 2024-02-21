<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');


Route::get('users',[UserController::class, 'index'])->name('users.index');
Route::get('users/create',[UserController::class, 'create'])->name('users.create');
Route::post('users',[UserController::class, 'store'])->name('users.store');
Route::get('users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}',[UserController::class, 'update'])->name('users.update');

require __DIR__.'/auth.php';
