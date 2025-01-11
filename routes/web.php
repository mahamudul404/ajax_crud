<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProductController::class, 'index']);
Route::post('/add-product', [ProductController::class, 'addProduct'])->name('add.product');
Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('update.product');
// delete
Route::get('/delete-product', [ProductController::class, 'deleteProduct'])->name('delete.product');
