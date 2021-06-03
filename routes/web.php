<?php

Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::resource('jobs', 'JobController')->only(['index', 'show']);

