<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



Route::get('/', [HomeController::class, 'homePage'])->name('homePage');

Route::get('/create-product', [ProductController::class, 'createProduct'])->name('createProduct');
Route::post('/store-product', [ProductController::class, 'storeProduct'])->name('storeProduct');
Route::post('/delete-product', [ProductController::class, 'destroy'])->name('destroy');
