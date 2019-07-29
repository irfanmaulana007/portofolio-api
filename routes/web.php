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

Route::get('/', 'AppController@getProfile');
Route::get('/api/get-profile', 'AppController@getProfile');
Route::get('/api/get-project', 'ProjectController@getProject');
Route::resource('/api/contact', 'ContactController');
