<?php

// Auth Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Frontend Routes
Route::get('/', 'Frontend\FrontendController@index');



// Backend Routes
