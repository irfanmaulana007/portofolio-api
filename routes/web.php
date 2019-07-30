<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ProfileController@getProfile');

// Login
Route::post('/api/login', 'AuthController@login');

// Profile
Route::get('/api/get-profile', 'ProfileController@getProfile');

// Project
Route::get('/api/get-project', 'ProjectController@getProject');

// Contact
Route::get('/api/contact', 'ContactController@get');
Route::post('/api/contact', 'ContactController@send');
