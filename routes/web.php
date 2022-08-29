<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/books', function () {
    return view('admin.book.index');
});

Route::get('/books/create', function () {
    return view('admin.book.create');
});