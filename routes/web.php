<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('welcome');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/products', [ProductController::class, 'index']);

    Route::resource('/movies', MovieController::class);
    
    Route::resource('/genres', GenreController::class);
    
    Route::resource('/reviews', ReviewController::class);

});

require __DIR__.'/auth.php';
