<?php

namespace App\Http\Controllers;

use App\Http\Repository\UserRepository;
use App\Http\Repository\CompanyRepository;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
	use DispatchesJobs, ValidatesRequests;

	public function __construct()
	{
		$this->userRepository 	= new UserRepository;
		$this->companyRepository 	= new CompanyRepository;
	}
}
