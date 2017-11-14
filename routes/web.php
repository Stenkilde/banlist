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
Route::post('/search', 'SearchController@search')->middleware('auth');

// Ban routes
Route::get('/', 'BanController@view')->middleware('auth');
Route::get('/api/ban', 'BanController@index')->middleware('auth');
Route::get('/api/ban/{id}', 'BanController@single')->middleware('auth');
Route::post('/api/ban', 'BanController@create')->middleware('auth');

// User routes
Route::post('/api/user', 'UserController@create')->middleware('auth');
// Auth based routes
Route::post('/api/auth', 'AuthController@authenticate')->middleware('auth');
Route::get('api/me', 'UserController@me')->middleware('auth');

// Case Routes
Route::get('/case/{id}', 'CaseController@single')->middleware('auth')->name('case');
Route::get('/create', 'CaseController@createView')->middleware('auth');
Route::post('/create', 'CaseController@create')->middleware('auth');

// Post Routes
Route::get('/post/{id}', 'BanController@createView')->middleware('auth');
Route::post('/post/create', 'BanController@post')->middleware('auth');

Auth::routes();