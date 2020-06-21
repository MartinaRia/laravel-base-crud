<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'OminiController@index')->name('home');
Route::get('/ominidetails/{id}', 'OminiController@show')->name('show');
