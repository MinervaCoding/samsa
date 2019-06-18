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
    return view('pages.home');
})->name('home');

Route::get('/projects', function () {
    return view('projects.index');
});

Route::get('/lean', function () {
    return view('lean.index');
});

// Sollte wie folgt gemacht werden:

// - /Page1 kann immer geändert werden, Route bleibt erhalten
Route::get('/Page1', function () {
    return view('pages.pageA');
})->name('TestPageA');

// - /Page2 kann immer geändert werden, Route bleibt erhalten
Route::get('/Page2', function () {
    return view('pages.pageB');
})->name('TestPageB');
