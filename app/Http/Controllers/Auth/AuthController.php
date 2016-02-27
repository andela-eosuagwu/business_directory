<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function register()
	{
		$data['email'] 		= "skjcsjhcsjdcsd";
		$data['sex']	 	= "emeka osuagwu";
		$data['full_name'] 	= "emeka osuagwu";
		$data['password'] 	= "skjcsjhcsjdcsd";

		$checkUserExist = $this->userRepository->checkUserExist($data['email']);
		
		if ($checkUserExist->count() > 0) {
			return "email is alread take jor";
		}

		$this->userRepository->createUser($data);
		return "user created";
	}
}
