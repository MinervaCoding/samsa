<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('content.home.index');
})->name('home');

Route::get('/Projects', function () {
    return view('content.projects.index');
})->name('Projects');

Route::get('/Lean', function () {
    return view('content.lean.index');
})->name('Lean');

// Sollte wie folgt gemacht werden:

// - /Time kann immer geändert werden, Route bleibt erhalten
Route::get('/Time', function () {
    return view('content.time.index');
})->name('Time');

// - /Admin kann immer geändert werden, Route bleibt erhalten
Route::get('/Admin', function () {
    return view('content.admin.index');
})->name('Admin');
