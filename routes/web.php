<?php

Route::redirect('/home', '/admin');
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('/pasang', 'JobController@pasang')->name('pasang');
Route::get('/pasang2', 'JobController@pasang2')->name('pasang2');
Route::get('/kontak', 'HomeController@kontak')->name('kontak');
Route::post('/kontakform', 'HomeController@kirimmail')->name('kontakform');
Route::post('/formpasang', 'LowonganController@formpasang')->name('formpasang');
// Route::get('/backkontak', 'HomeController@backkontak')->name('backkontak');



Route::get('search', 'HomeController@search')->name('search');
Route::resource('jobs', 'JobController')->only(['index', 'show']);
Route::get('category/{category}', 'CategoryController@show')->name('categories.show');
Route::get('location/{location}', 'LocationController@show')->name('locations.show');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');
    // Jobs
    Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    Route::resource('jobs', 'JobsController');

    //Location
    Route::delete('locations/destroy', 'LocationsController@massDestroy')->name('locations.massDestroy');
    Route::resource('locations', 'LocationsController');

     // Companies
     Route::delete('companies/destroy', 'CompaniesController@massDestroy')->name('companies.massDestroy');
     Route::post('companies/media', 'CompaniesController@storeMedia')->name('companies.storeMedia');
     Route::resource('companies', 'CompaniesController');

     
     Route::delete('lowongan/destroy', 'LowonganController@massDestroy')->name('lowongan.massDestroy');
     Route::resource('lowongan', 'LowonganController');
});
