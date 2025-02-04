<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('', [CategoryController::class, 'index'])->name('home');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('products/{product}', [ProductController::class, 'show'])->name('product.show');
