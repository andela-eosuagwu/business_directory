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
		return Company::with('reviews')->where($id);
	}

	public function createCompany($data)
	{
		$new_company = new Company;
//		return $data;
		$new_company->name 		= $data['company_name'];
		$new_company->status 		= 0;
		$new_company->email		= $data['email'];
		$new_company->tags		= $data['tags'];
		$new_company->images		= $data['images'];
		$new_company->user_id		= $data['user_id'];
		$new_company->website 		= $data['website'];
		$new_company->address 		= $data['address'];
		$new_company->description 	= $data['description'];
		$new_company->phone_number 	= $data['phone_number'];
		
		$new_company->save();
	}

	public function checkComapanyNameExist($name)
	{
		return User::where('email', $email)->get();
	}

	public function updateCompany($data)
	{
		$company =  Company::where('id', $data['company_id'])
				->update([
					'name' 	=> $data['name'],
					'email'		=> $data['email'],
					'website'	=> $data['website'],
					'address'	=> json_encode($data['address']),
					'description'	=> $data['description']
				]);

			return Company::find(1);
	}
	

}