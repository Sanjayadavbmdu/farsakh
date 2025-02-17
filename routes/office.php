<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('office.dashboard');
    
})->name('office.dashboard');


Route::get('/subscriptions', function () {
    return view('office.subscription.index');
    
})->name('office.subscription');

Route::get('/platfrom-message', function () {
    return view('office.platfrom.index');
    
})->name('office.platfrom');



Route::get('/financial-services', function () {
    return view('office.financial_service.index');
    
})->name('office.financial');


Route::get('/additional-request', function () {
    return view('office.additional_request.index');
    
})->name('office.additional.request');



Route::get('/add-property-owners', function () {
    return view('office.new_addtions.add-owner');
    
})->name('office.new_addtions.add.owner');

Route::get('/show-property-owners', function () {
    return view('office.new_addtions.show-owners');
    
})->name('office.new_addtions.show.owner');



Route::get('/add-new-tenants', function () {
    return view('office.new_addtions.add-tenant');
    
})->name('office.new_addtions.add.tenant');



Route::get('/show-tenants', function () {
    return view('office.new_addtions.show-tenant');
    
})->name('office.new_addtions.show.tenant');

Route::get('/register-new-property', function () {
    return view('office.new_addtions.add-property');
    
})->name('office.new_addtions.add.property');


Route::get('/show-properties', function () {
    return view('office.new_addtions.show-property');
    
})->name('office.new_addtions.show.property');


Route::get('/property-management-requests', function () {
    return view('office.requests.index');
    
})->name('office.requests.index');


Route::get('/evacuation-requests', function () {
    return view('office.requests.evaction');
    
})->name('office.requests.evaction');

Route::get('/auction-requests', function () {
    return view('office.requests.auction');
    
})->name('office.requests.auction');


Route::get('/acitve-expire-contract', function () {
    return view('office.contract.active_expire');
    
})->name('office.contract.active_expire');




Route::get('/organize-new-contracts-or-renew-existing-ones', function () {
    return view('office.contract.renew');
    
})->name('office.contract.renew');

Route::get('/issue-receipts-and-payments', function () {
    return view('office.finance.index');
    
})->name('office.finance.index');



Route::get('/generate-receipt-reports', function () {
    return view('office.finance.generate-receipt');
    
})->name('office.finance.generate-receipt');


Route::get('/messages', function () {
    return view('office.message.index');
    
})->name('office.message.index');

