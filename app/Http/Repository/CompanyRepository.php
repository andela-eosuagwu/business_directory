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


		return $new_company;
	}

	public function checkComapanyNameExist($name)
	{
		return User::where('email', $email)->get();
	}

}