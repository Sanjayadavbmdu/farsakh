<?php

use App\Http\Controllers\maintenance\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/login',[AuthController::class,'index'])->name('maintenance.login');


Route::get('/dashboard', [function () {
    return view('maintenance.dashboard');
}])->name('maintenance.dashboard');


Route::get('/maintenance-requests', [function () {
    return view('maintenance.maintenanceRequest.index');
}])->name('maintenance.request');



Route::get('/manage-issue', [function () {
    return view('maintenance.manageissue.index');
}])->name('maintenance.issue');


Route::get('/setting', [function () {
    return view('maintenance.setting.index');
}])->name('maintenance.setting');


Route::get('/offers', [function () {
    return view('maintenance.offer.index');
}])->name('maintenance.offer');

Route::get('/payments', [function () {
    return view('maintenance.payment.index');
}])->name('maintenance.payments');

Route::get('/messages', [function () {
    return view('maintenance.messages.index');
}])->name('maintenance.messages');

