<?php

namespace App\Http\Repository;

use App\User;

class BlogRepository
{
	public function getAllUsers()
	{
		return User::get();
	}

}