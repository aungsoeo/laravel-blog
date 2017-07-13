<?php
Route::get('/','BlogController@index')->name('home');
Route::get('/blog','BlogController@index')->name('home');
Route::get('/blog/create','BlogController@create');
Route::post('/blog/store','BlogController@store');

Route::get('/blog/{blog}','BlogController@show');

Route::post('/blog/{blog}/comments','CommentController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');


Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
