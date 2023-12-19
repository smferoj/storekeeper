<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



Route::get('/', [HomeController::class, 'homePage'])->name('homePage');
Route::get('/create-product', [ProductController::class, 'createProduct'])->name('createProduct');