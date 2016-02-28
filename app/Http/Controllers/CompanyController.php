<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
	public function index()
	{
		
		$companies =  $this->companyRepository->getAllCompanies();
		return view('pages.companies', compact('companies'));
	}

	public function create()
	{
		
		$data['role'] 		= 0;
		$data['tags'] 		= ['fjhwfeferfe', 'fjhfjehrfjer'];
		$data['name'] 	= "andela";
		$data['user_id'] 	= 1;
		$data['images'] 	= ['fjhwfeferfe', 'fjhfjehrfjer'];
		$data['address'] 	= "jhrfaejrhfaehrgfearg";
		$data['description']	= "hefafjhajchscjshjdhvdjfhvdhf";

		return $this->companyRepository->createCompany($data);
	}

	public function company($id)
	{
		return $this->companyRepository->getCompanyById($id);
	}

	public function edit($id)
	{
		$company = $this->company($id);
		return view('pages.company_edit', compact('company'));
	}
}
