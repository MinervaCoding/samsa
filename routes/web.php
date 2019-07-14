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

Route::group(['prefix' => 'UserProfile'], function () {
    Route::get('/', 'UserProfileController@index')->name('userprofile');
});

//Routes for Admin Page
Route::resource('subsidiary','AdminSubsidiaryController');
Route::resource('department','AdminDepartmentController');

Route::group(['prefix' => 'Admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin');

    Route::get('/Subsidiary', 'AdminSubsidiaryController@index')->name('AdminSubsidiary');
    Route::get('/Department', 'AdminDepartmentController@index')->name('AdminDepartment');

});

Route::get('/Lean', function () {
    return view('content.lean.index');
})->name('lean');

Route::get('/Login', function () {
    return view('auth.login');
})->name('login');

Route::get('/Register', function () {
    return view('auth.register');
})->name('register');

Auth::routes();

Route::get('/Home', 'HomeController@index')->name('home');

