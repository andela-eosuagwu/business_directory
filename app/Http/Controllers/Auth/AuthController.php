<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Validator;
use App\Model\wUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\Mail;
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

	public function register(SignupRequest $request)
	{
		$checkUserExist = $this->userRepository->checkUserExist($request['email']);

		$user = $this->userRepository->createUser($request->all());

		if($user){
			//send mail to the user
			$domain = $_SERVER['SERVER_NAME'];
			$data = array(
				'name' => $request->full_name,
				'email' => $request->email,
				'subject' => 'Welcome to Lekki Republic',
				'messageabout' => "Hi ". $request->name.", thank you for signing up, kindly confirm your email account.",
				'link' => 'http://'. $domain."/confirmAccount/".$user.'/'.md5($request->email)
			);




				Mail::send('emails.welcome', $data, function($message) use ($data)
				{
					$message->to($data['email'], $data['name'])->subject('Welcome to Lekki Republic');
				});



			session()->flash('alert-success', 'An email has been sent to you, Kindly confirm your email address');

			return redirect()->to('/login');
		}else{
			session()->flash('alert-danger', 'Oops, Something went wrong on login, Please try again!!!');
			return redirect()->to('/login');
		}

	}

	public function login(Request $request)
	{
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
		{
			if(Auth::user()->role > 0){
				return redirect()->to('/dashboard');
			}
			return view('pages.company.dashboard');
		}else{
			session()->flash('alert-danger', 'Login Credential failed');
			return redirect()->to('/login');
		}
	}


}
