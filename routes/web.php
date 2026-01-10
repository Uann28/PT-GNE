<?php

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
