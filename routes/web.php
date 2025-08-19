<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/artwork', 'App\Http\Controllers\ArtworkController@index')->name('artwork.index');

Route::post('/artwork/save', 'App\Http\Controllers\ArtworkController@save')->name('artwork.save');
Route::get('/artwork/create/success', 'App\Http\Controllers\ArtworkController@createSuccess')->name('artwork.createSuccess');
Route::get('/artwork/create', action: 'App\Http\Controllers\ArtworkController@create')->name('artwork.create');

Route::get('/artwork/{id}', 'App\Http\Controllers\ArtworkController@show')->name('artwork.show');
Route::delete('/artwork/{id}', 'App\Http\Controllers\ArtworkController@delete')->name('artwork.delete');
