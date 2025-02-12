<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/set-language', function (Request $request) {
    $request->validate(['locale' => 'required|in:en,ar']);
    session()->put('locale', $request->locale);
    return response()->json(['success' => true]);
})->name('language.change');

Route::post('/set-rtl', function (Request $request) {
    $request->validate(['direction' => 'required|in:ltr,rtl']);
    session()->put('direction', $request->direction);
    return response()->json(['success' => true]);
});
