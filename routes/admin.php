<?php

use App\Http\Controllers\admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::middleware('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});