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


// Search routes
Route::post('/search', 'SearchController@search');

// Ban routes
Route::get('/', 'BanController@view');
Route::get('/api/ban', 'BanController@index');
Route::get('/api/ban/{id}', 'BanController@single');
Route::post('/api/ban', 'BanController@create');

// User routes
Route::post('/api/user', 'UserController@create');
// Auth based routes
Route::post('/api/auth', 'AuthController@authenticate');
Route::get('api/me', 'UserController@me');

// Case Routes
Route::get('/case/{id}', 'CaseController@single');
Route::get('/create', 'CaseController@createView');
Route::post('/create', 'CaseController@create');
