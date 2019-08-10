<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', 'ProfileController@getProfile');

// Auth
Route::post('login', 'AuthController@login');

// Profile
Route::get('profile', 'ProfileController@getProfile');

// Project
Route::get('project', 'ProjectController@getProject');

// Contact
Route::get('contact', 'ContactController@get');
Route::post('contact', 'ContactController@send');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', 'AuthController@logout');

});