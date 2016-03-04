<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Validator;
use App\Model\wUser;
use Illuminate\Http\Request;
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

	public function register(Request $request)
	{
		$checkUserExist = $this->userRepository->checkUserExist($request['email']);
		
		if ($checkUserExist->count() > 0) {
			return "email is alread take jor";
		}

		$this->userRepository->createUser($request->all());
		
		return "user created";
	}

	public function login(Request $request)
	{
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
		{
			return view('pages.company.dashboard');
		}else{
			session()->flash('alert-danger', 'Login Credential failed');
			return redirect()->to('/login');
		}
	}


}
