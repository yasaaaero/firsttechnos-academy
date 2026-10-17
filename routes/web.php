<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/product/{product}', [ProductController::class, 'show'])
    ->name('product.show');

Route::get('/instructor', function () {
    return view('instructor');
});
