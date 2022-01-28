<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')-> name('home');
Route::get('/comic/comic/{id}', 'HomeController@comic')-> name('comic');