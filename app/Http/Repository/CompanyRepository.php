<?php

namespace App\Http\Repository;

use App\Model\Company;

class CompanyRepository
{

	public function getAllCompanies()
	{
		return Company::get();
	}

	public function getCompanyById($id)
	{
		return Company::find($id);
	}

	public function createCompany($data)
	{
		$new_company = new Company;

		$new_company->tags 		= $data['tags'];
		$new_company->type 		= $data['type'];
		$new_company->name 		= $data['name'];
		$new_company->status 		= 0;
		$new_company->user_id		= $data['user_id'];
		$new_company->images		= $data['images'];
		$new_company->address 		= $data['address'];
		$new_company->description 	= $data['description'];
		
		$new_company->save();
	}

	public function checkComapanyNameExist($name)
	{
		return User::where('email', $email)->get();
	}

}