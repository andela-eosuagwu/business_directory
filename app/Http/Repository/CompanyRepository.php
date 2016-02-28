<?php

namespace App\Http\Repository;

use App\Model\Company;

class CompanyRepository
{

	public function getAllCompany()
	{
		return Company::get();
	}

	public function createCompany($data)
	{
		$new_company = new Company;

		$new_company->role 		= 0;
		$new_company->email 		= $data['email'];
		$new_company->full_name		= $data['full_name'];
		$new_company->password 		= bcrypt($data['password']);
		
		return $new_company;
	}

	public function checkComapanyNameExist($name)
	{
		return User::where('email', $email)->get();
	}

}