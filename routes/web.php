<?php

Route::get('/', 'HomeController@index');

 
Route::get('/admin/category', 'Admin\CategoryController@index')->name('index');
Route::get('/admin/category/create', 'Admin\CategoryController@create')->name('create');
Route::post('/admin/category/create', 'Admin\CategoryController@create')->name('create');
Route::get('/admin/category/update/{id}', 'Admin\CategoryController@update')->name('update');
Route::post('/admin/category/update/{id}', 'Admin\CategoryController@update')->name('update');
Route::get('/admin/category/delete/{id}', 'Admin\CategoryController@delete')->name('delete');
Route::post('/admin/category/delete/{id}', 'Admin\CategoryController@delete')->name('delete');

Route::get('/admin/films', 'Admin\FilmsController@index')->name('index');
Route::get('/admin/films/create', 'Admin\FilmsController@create')->name('create');
Route::post('/admin/films/create', 'Admin\FilmsController@create')->name('create');
Route::get('/admin/films/update/{id}', 'Admin\FilmsController@update')->name('update');
Route::get('/admin/films/delete/{id}', 'Admin\FilmsController@delete')->name('delete');
Route::post('/admin/films/update/{id}', 'Admin\FilmsController@update')->name('update');
Route::post('/admin/films/delete/{id}', 'Admin\FilmsController@delete')->name('delete');
 
Route::get('/admin/hall', 'Admin\HallController@index')->name('index');
Route::get('/admin/hall/create', 'Admin\HallController@create')->name('create');
Route::post('/admin/hall/create', 'Admin\HallController@create')->name('create');
Route::get('/admin/hall/update/{id}', 'Admin\HallController@update')->name('update');
Route::post('/admin/hall/delete/{id}', 'Admin\HallController@delete')->name('delete');

Route::get('/admin/place', 'Admin\PlaceController@index')->name('index');
Route::get('/admin/place/create', 'Admin\PlaceController@create')->name('create');
Route::post('/admin/place/create', 'Admin\PlaceController@create')->name('create');
Route::get('/admin/place/update/{id}', 'Admin\PlaceController@update')->name('update');
Route::post('/admin/place/delete/{id}', 'Admin\PlaceController@delete')->name('delete');
// Route::resource('/admin/place', 'Admin\PlaceController@');

Route::get('/genre', 'CategoryController@genre')->name('genre');
Route::get('/halls', 'HallsController@index')->name('index');
Route::get('/films', 'FilmController@index')->name('index');
Route::get('/films/detail/{id}', 'FilmController@detail')->name('detail');
Route::get('/films/show/{id}', 'CategoryController@show')->name('show');

Route::get('/admin/showtime', 'Admin\ShowtimeController@index')->name('index');
Route::get('/admin/showtime/create', 'Admin\ShowtimeController@create')->name('create');
Route::post('/admin/showtime/create', 'Admin\ShowtimeController@create')->name('create');
Route::get('/admin/showtime/update/{id}', 'Admin\ShowtimeController@update')->name('update');
Route::post('/admin/showtime/update/{id}', 'Admin\ShowtimeController@update')->name('update');
Route::post('/admin/showtime/delete/{id}', 'Admin\ShowtimeController@delete')->name('delete');


Route::get('/admin/setting', 'Admin\SettingController@index')->name('index');
Route::post('/admin/setting', 'Admin\SettingController@index')->name('index');


Route::get('/search', 'SearchController@search')->name('search');
Route::post('/search', 'SearchyController@search')->name('search');

Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::post('/contacts', 'HomeController@contacts')->name('contacts');

Route::get('/booking', 'BookingController@contacts')->name('index');
Route::post('/booking', 'BookingController@contacts')->name('index');



 