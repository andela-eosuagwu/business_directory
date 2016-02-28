<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
	public function detail($id)
	{
		return $id;
	}

	public function create()
	{
		
		$data['role'] 		= 0;
		$data['name'] 	= "andela";
		$data['user_id'] 	= 1;
		$data['images'] 	= ['fjhwfeferfe', 'fjhfjehrfjer'];
		$data['address'] 	= "jhrfaejrhfaehrgfearg";
		$data['description']	= "hefafjhajchscjshjdhvdjfhvdhf";

		return $this->companyRepository->createCompany($data);

	}
}
