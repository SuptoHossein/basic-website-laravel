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
    Route::resource('profile', 'Backend\ProfileController');
    Route::get('password/view', 'Backend\ProfileController@passwordView')->name('profile.password.view');
    Route::post('password/update', 'Backend\ProfileController@passwordUpdate')->name('profile.password.update');

    // Todo routes
    Route::resource('todo', 'TodoController');
    Route::put('todo/done/{todo}', 'TodoController@done')->name('todo.done');


});
