<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')-> name('home');
Route::get('/comic/{id}', 'HomeController@comic')-> name('comic');

Route::get('/create', 'HomeController@create')-> name('create');
Route::post('/store', 'HomeController@store')-> name('store');

Route::get('/edit/{id}', 'HomeController@edit')-> name('edit');
Route::post('/update/{id}', 'HomeController@update')-> name('update');

Route::get('/delete/{id}', 'HomeController@delete')-> name('delete');