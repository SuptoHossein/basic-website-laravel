<?php

// Auth Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Frontend Routes
Route::get('/', 'Frontend\FrontendController@index');



// Backend Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('/', function() {
        return view('admin.dashboard.index');
        // return view('layouts.dashboard');
    });

    Route::resource('user', 'Backend\UserController');

    // Route::get('/view', 'Backend\UserController1@index')->name('user.index');
    // Route::get('/add', 'Backend\UserController1@create')->name('user.create');
    // Route::get('/store', 'Backend\UserController1@store')->name('user.store');
    // Route::get('/edit/{id}', 'Backend\UserController1@edit')->name('user.edit');
    // Route::get('/update/{id}', 'Backend\UserController1@update')->name('user.update');
    // Route::get('/delete/{id}', 'Backend\UserController1@destroy')->name('user.delete');

});
