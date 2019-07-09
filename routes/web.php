<?php

Route::get('/', function () {
    return view('content.home.index');
})->name('home');

 Route::get('/Projects', function () {
    return view('content.projects.index');
})->name('Projects');

Route::get('/Lean', function () {
    return view('content.lean.index');
})->name('Lean');

// - /Time kann immer geändert werden, Route bleibt erhalten
Route::get('/Time', function () {
    return view('content.time.index');
})->name('Time');

Route::get('/Login', function () {
    return view('auth.login');
})->name('Login');

Route::get('/Register', function () {
    return view('auth.register');
})->name('Register');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
