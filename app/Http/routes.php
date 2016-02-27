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

Route::get('/login', function () {
	return view('pages.login');
});

Route::get('/register', function () {
	return view('pages.register');
});

Route::post('register', [
	'uses' => 'Auth\AuthController@register', 
	'as' => 'register'
]);

Route::get('users', [
	'uses' => 'UserController@index', 
	'as' => 'register'
]);
