<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('user.pages.about');
})->name('about');

Route::get('/products', function () {
    return view('user.pages.products');
})->name('products');

Route::get('/contact', function () {
    return view('user.pages.contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function(){
    Route::resource('information', InformationController::class);
});


