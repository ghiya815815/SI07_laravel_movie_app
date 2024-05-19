<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GenreController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/products', function () {
    return view('product');
});

Route::get('/genres', [GenreController::class, 'genre']);

Route::get('/reviews', [ReviewController::class, 'review']);


