<?php

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/

// Home Page

Route::get('/', function () {
    return view('auth.login');
});

// User Auth Routes

Auth::routes();

// User Module Management

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('project', 'ProjectController');
    Route::resource('word', 'WordController');
});


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
