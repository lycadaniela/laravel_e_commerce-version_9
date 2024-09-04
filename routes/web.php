<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create'])->name('create_product'); // Papunta sa UI
Route::post('/products/store', [ProductController::class, 'store'])->name('store_product'); // Pang save ng product sa DB

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('edit_product'); // edit form 
Route::put('/products/{product}', [ProductController::class, 'update'])->name('update_product'); // save edit 

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('destroy_product');// delete data