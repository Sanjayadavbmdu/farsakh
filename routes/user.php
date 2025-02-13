<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard');


Route::get('/buy-porperties', function () {
    return view('user.buy.index');
})->name('user.buy');