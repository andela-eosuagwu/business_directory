<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
	public function index()
	{
		$companies =  $this->companyRepository->getAllCompanies();
		//return $companies;
		
		return view('pages.company.all_company', compact('companies'));
	}

	public function create(Request $request)
	{	

		$url = "https://pixabay.com/static/uploads/photo/2015/01/31/05/05/background-618226_960_720.png";
		$image = [
			'logo' 		=> $url,
			"album"	=>[$url, $url, $url],
		];

		$request['images'] = $image;
		$request['user_id'] = 1;

		return $this->companyRepository->createCompany($request->all());
	}

	public function view($id)
	{
		$company =  $this->companyRepository->getCompanyById($id);
		
		$data = [
			"company" => $company,
		];

		return view('pages.company.view', compact('data'));
	}

	public function edit($id)
	{
		$company = $this->companyRepository->getCompanyById($id);
		
		return view('pages.company.edit', compact('company'));
	}

	public function update(Request $request)
	{
		return $request->all();

		
	}

	public function search($keyword)
	{
		$data = [
			"companies" => "fraeraeraer",
		];
		
		return view('pages.search');
	}
}
