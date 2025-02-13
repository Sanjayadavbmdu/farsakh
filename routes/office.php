<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('office.dashboard');
    
});


Route::get('/subscriptions', function () {
    return view('office.subscription.index');
    
})->name('office.subscription');

Route::get('/platfrom-message', function () {
    return view('office.platfrom.index');
    
})->name('office.platfrom');



Route::get('/financial-services', function () {
    return view('office.financial_service.index');
    
})->name('office.financial');