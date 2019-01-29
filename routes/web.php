<?php

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

/*
|--------------------------------------------------------------------------
| Administrator
|--------------------------------------------------------------------------
*/

// Login

Route::get('admin', 'Admin\LoginController@index');
Route::post('admin/login', 'Admin\LoginController@login');
Route::get('admin/logout', 'Admin\LoginController@logout');

// Tools

Route::group(['middleware' => ['auth','administrator']], function () {
    Route::get('admin/dashboard', 'Admin\DashboardController@index');
    Route::resource('admin/language', 'Admin\LanguageController');
    Route::resource('admin/user', 'Admin\UserController');
});
