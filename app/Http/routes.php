<?php

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
/*
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}', 'ArticlesController@show');
*/

Route::resource('articles', 'ArticlesController');