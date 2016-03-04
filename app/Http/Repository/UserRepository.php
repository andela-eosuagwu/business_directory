<?php

namespace App\Http\Repository;

use App\User;

class UserRepository
{

	public function getAllUsers()
	{
		return User::get();
	}

	public function getUserById($id)
	{
		return User::find($id);
	}

	public function createUser($data)
	{
		$new_user = new User;

		$new_user->role 		= 0;
		$new_user->email 		= $data['email'];
		$new_user->full_name	= $data['full_name'];
		$new_user->password 	= bcrypt($data['password']);
		
		$new_user->save();
	}

	public function checkUserExist($email)
	{
		return User::where('email', $email)->get();
	}

}