<?php

namespace App\Http\Controllers;

use App\Model\Company;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
	public function index()
	{
		$companies =  $this->companyRepository->getAllCompanies();
			
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
		$data =  $request->all();
		$data['company_id'] = 1;
		return $this->companyRepository->updateCompany($data);
	}

	public function search($keyword)
	{
		$data = [
			"companies" => "fraeraeraer",
		];
		
		return view('pages.search');
	}


	public function jsonBusiness(){
		$companies = Company::where('featured','1')->paginate(10);
		//time to Build Json
		foreach($companies as $company){
			$json['data'][] = array(
				"id" => $company->id,
				"category" => $company->category->name,
				"title" => $company->name,
				"location" => $company->location,
				"latitude" => $company->gps_lat,
				"longitude" => $company->gps_lon,
				"url" => "",
				"type" => "",
				"type_icon" => "assets/icons/real-estate/house.png",
				"rating" => $company->average_ratings,
				"gallery" => $company->images,
				"features" => "",
				"date_created" => $company->created_at,
				"price" => "",
				"featured" => $company->featured,
				"color" => "",
				"person_id"=> 1,
				"year"=> $company->year_established,
				"description"=> $company->description
			);
		}
		return $json;
	}
}
