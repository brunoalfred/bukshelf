<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
/**
 * Website routes
 * 
 **/

Route::get('/', function () {
    return view('welcome');
});



/**
 * Dashboard routes
 * 
 **/

Route::get('/dashboard', [DashboardController::class, 'index']);


Route::get('/books', [BookController::class, 'index'])->name('books.index'); 
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');