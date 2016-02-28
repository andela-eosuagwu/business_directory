<?php

namespace App\Http\Repository;

use App\Model\Company;

class CompanyRepository
{

	public function getAllCompanies()
	{
		return Company::get();
	}

	public function createCompany($data)
	{
		$new_company = new Company;

		$new_company->role 		= 1;
		$new_company->tags 		= json_encode($data['tags']);
		$new_company->name 		= $data['name'];
		$new_company->user_id		= $data['user_id'];
		$new_company->images		= json_encode($data['images']);
		$new_company->address 		= $data['address'];
		$new_company->description 	= $data['description'];
		
		$new_company->save();
	}

	public function checkComapanyNameExist($name)
	{
		return User::where('email', $email)->get();
	}

}