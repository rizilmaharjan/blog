<?php

use App\Http\Controllers\ArticleDetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagArticlesController;
use Illuminate\Support\Facades\Route;



Route::get('/', HomeController::class);
Route::get('articles/{article}', ArticleDetailController::class)->name('articles.show');
Route::get('tags/{tag}/articles', TagArticlesController::class)->name('tags.articles');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

