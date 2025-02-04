<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('', [CategoryController::class, 'index'])->name('home');
Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');
