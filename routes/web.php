<?php

Route::get('/', function () {
    return view('content.home.index');
})->name('home');

Route::group(['prefix' => 'Projects'], function () {
    Route::get('/', 'Projects@index')->name('Projects');
    Route::match(['get', 'post'], 'create', 'Projects@create');
    Route::match(['get', 'put'], 'update/{id}', 'Projects@update');
    Route::delete('delete/{id}', 'Projects@delete');
});

Route::get('/Lean', function () {
    return view('content.lean.index');
})->name('Lean');

// - /Time kann immer geändert werden, Route bleibt erhalten
Route::get('/Time', function () {
    return view('content.time.index');
})->name('Time');