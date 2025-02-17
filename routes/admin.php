<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('lang/home', [LangController::class, 'index']);

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

Route::middleware('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::get('/properties', function () {
        return view('admin.properties.index');
    })->name('admin.properties');

    Route::get('/property-show', function () {
        return view('admin.properties.show');
    })->name('admin.property.show');


    Route::get('/office/company', function () {
        return view('admin.office_company.index');
    })->name('admin.company.index');

    Route::get('/users', function () {
        return view('admin.user.index');
    })->name('admin.user.index');

    Route::get('/tenants', function () {
        return view('admin.tenant.index');
    })->name('admin.tenant.index');

    Route::get('/maintenance', function () {
        return view('admin.maintenance.index');
    })->name('admin.maintenance.index');


    Route::get('/add-listing', function () {
        return view('admin.properties.add');
    })->name('admin.properties.add');

    Route::get('/listings', function () {
        return view('admin.properties.adminshow');
    })->name('admin.properties.admin.show');

    
    Route::get('/add-auction', function () {
        return view('admin.auction.add');
    })->name('admin.auction.add');

    Route::get('/auctions', function () {
        return view('admin.auction.index');
    })->name('admin.auction.show');


    Route::get('/blacklist', function () {
        return view('admin.blacklist.index');
    })->name('admin.blacklist.show');

    Route::get('/subscription-plans', function () {
        return view('admin.subscription.index');
    })->name('admin.subscription.show');

    Route::get('/subscribed', function () {
        return view('admin.subscription.subscribed');
    })->name('admin.subscription.subscribed');


    Route::get('/messages', function () {
        return view('admin.messages.index');
    })->name('admin.messages.index');

    



    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});