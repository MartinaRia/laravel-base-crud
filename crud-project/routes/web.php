<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'OminiController@index')->name('home');
Route::get('/ominidetails/{id}', 'OminiController@show')->name('show');
Route::get('/ominidetails/delete/{id}', 'OminiController@destroy')->name('destroy');
Route::post('/store', 'OminiController@store')->name('store');
Route::get('/edit/{id}', 'OminiController@edit')->name('edit');
