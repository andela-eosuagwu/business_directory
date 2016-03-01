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
	return view('pages.index.index');
});

Route::get('/home', function () {
	return view('welcome');
});

Route::get('/login', function () {
	return view('pages.login');
});

Route::post('login', [
	'uses' => 'Auth\AuthController@login', 
	'as' => 'register'
]);

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

Route::group(['prefix' => 'companies'], function () {

	Route::get('/', [
		'uses' 	=> 'CompanyController@index', 
		'as' 	=> 'companies'
	]);

});

Route::group(['prefix' => 'company'], function () {
	
	Route::get('/', function ()    {
		return view('pages.company_detail');
	});	

	Route::get('create', [
		'uses' 	=> 'CompanyController@create', 
		'as' 	=> 'company.create'
	]);

	Route::get('{id}', [
		'uses' 	=> 'CompanyController@company', 
		'as' 	=> 'company.{id}'
	]);

	Route::get('{id}/edit', [
		'uses' 	=> 'CompanyController@edit', 
		'as' 	=> 'company.{id}.edit'
	]);

	Route::get('search/{keyword}', [
		'uses' 	=> 'CompanyController@search', 
		'as' 	=> 'company.search.{keyword}'
	]);

});