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

Route::get('/home',[
	'uses' => 'HomeController@index',
	'as' => 'home'
]);

Route::get('/logout',[
	'uses' => 'Auth\AuthController@getLogout',
	'as' => 'logout'
] );

Route::get('/jsonBusiness',[
	'uses' => 'CompanyController@jsonBusiness',
	'as' => 'json'
]);

Route::get('/login', function () {
	return view('pages.login');
});

Route::get('/auth/login', function () {
	return view('pages.login');
});

Route::post('login', [
	'uses' => 'Auth\AuthController@login',
	'as' => 'register'
]);

Route::get('/register', function () {
	return view('pages.register');
});

Route::get('/confirmAccount/{id}/{encrypted}',['as' => 'confirmAccount', 'uses' => 'HomeController@confirmAccount']);


Route::post('register', [
	'uses' => 'Auth\AuthController@register',
	'as' => 'register'
]);


Route::group(['middleware' => 'auth'], function () {

	Route::get('/dashboard',[
		'uses' => 'CompanyController@dashboard',
		'as' => 'dashboard'
	]);

	Route::get('users', [
		'uses' => 'UserController@index',
		'as' => 'register'
	]);

	Route::get('user/edit', [
		'uses' => 'UserController@edit',
		'as' => 'edit.'
	]);

	Route::get('selectplan/{id}', [
		'uses' 	=> 'CompanyController@selectPlan',
		'as' 	=> 'selectplan'
	]);


	Route::group(['prefix' => 'companies'], function () {

		Route::get('/', [
			'uses' 	=> 'CompanyController@index',
			'as' 	=> 'companies'
		]);

	});

	Route::group(['prefix' => 'business'], function () {

		Route::get('/', function ()    {
			return view('pages.company_detail');
		});

		Route::get('create', function ()    {
			if(!isset(Auth::user()->plan) || Auth::user()->plan == 0){
				session()->flash('alert-danger', 'Kindly select a plan before creating your business. Click on Add a Business');
				return redirect()->to('/dashboard');
			}
			return view('pages.company.create');
		});

		Route::post('create', [
			'uses' 	=> 'CompanyController@create',
			'as' 	=> 'company.create'
		]);

		Route::get('{id}', [
			'uses' 	=> 'CompanyController@view',
			'as' 	=> 'company.{id}'
		]);

		Route::get('{id}/edit', [
			'uses' 	=> 'CompanyController@edit',
			'as' 	=> 'company.{id}.edit'
		]);

		Route::post('update', [
			'uses' 	=> 'CompanyController@update',
			'as' 	=> 'company.update'
		]);

		Route::get('search/{keyword}', [
			'uses' 	=> 'CompanyController@search',
			'as' 	=> 'company.search.{keyword}'
		]);

		Route::post('review', [
			'uses' 	=> 'ReviewController@createReview',
			'as' 	=> 'company.review'
		]);

	});


Route::group(['prefix' => 'blog'], function () {

	Route::get('/', [
		'uses' 	=> 'BlogController@index', 
		'as' 	=> 'blog'
	]);

	Route::get('create', [
		'uses' 	=> 'BlogController@create', 
		'as' 	=> 'blog.create'
	]);

	Route::get('{id}', [
		'uses' 	=> 'BlogController@view', 
		'as' 	=> 'blog.{id}'
	]);

	Route::post('comment', [
		'uses' 	=> 'BlogController@comment', 
		'as' 	=> 'blog.comment'
	]);

});
