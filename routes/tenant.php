<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[function (){
    return view('tenant.dashboard');
}])->name('tenant.dashboard');


Route::get('/myrentals',[function(){
    return view('tenant.myrentals.index');
}])->name('tenant.rental');


Route::get('/requests',[function(){
    return view('tenant.requests.index');
}])->name('tenant.request');

Route::get('/show-requests',[function(){
    return view('tenant.requests.show');
}])->name('tenant.request.show');


Route::get('/maintenance',[function(){
    return view('tenant.maintenance.index');
}])->name('tenant.maintenance');

Route::get('/show-reports-maintenance',[function(){
    return view('tenant.maintenance.show');
}])->name('tenant.maintenance.show');


Route::get('/payments',[function(){
    return view('tenant.payment.index');
}])->name('tenant.payment');


Route::get('/messages',[function(){
    return view('tenant.messages.index');
}])->name('tenant.messages');


Route::get('/documents',[function(){
    return view('tenant.document.index');
}])->name('tenant.document');

Route::get('/setting',[function(){
    return view('tenant.setting.index');
}])->name('tenant.setting');