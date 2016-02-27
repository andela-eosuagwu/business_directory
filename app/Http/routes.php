<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/register', function () {
	return view('pages.register');
});


Route::get('login', [
	'uses' => 'Auth\AuthController@login', 
	'as' => 'login'
]);

Route::get('users', [
	'uses' => 'UserController@index', 
	'as' => 'register'
]);

Route::post('register', [
	'uses' => 'Auth\AuthController@register', 
	'as' => 'register'
]);
