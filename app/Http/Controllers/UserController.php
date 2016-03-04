<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function index()
	{
		return $this->userRepository->getAllUsers();	
	}

	public function edit()
	{
		$user = $this->userRepository->getUserById(Auth::user()->id);
		return view('pages.user.edit');
	}

}
