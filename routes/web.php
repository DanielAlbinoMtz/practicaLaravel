<?php

use Illuminate\Support\Facades\Route;


Route::get('/','GuestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entries/create', 'EntryController@create')->name('entries');
Route::post('/entries', 'EntryController@store')->name('entries');

Route::get('/entries/{entryBySlug}', 'GuestController@show');

Route::get('/entries/{entry}/edit', 'EntryController@edit');//forma parte de entry controller por que es algo que debe estar protegido
Route::put('/entries/{entry}', 'EntryController@update');

Route::get('users/{user}', 'UserController@show');
