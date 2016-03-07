<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyCreate;
use App\Model\Company;
use App\Model\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{
	public function dashboard(){
		if(Auth::user()->role == 1){
			$business = Company::count();
			$reviews = Review::count();
			$users = User::count();
			$pending = Company::where('status', 0)->paginate(5);
			return view('pages.company.admindashboard')->with(compact('business','reviews','users','pending'));
		}else {
			return view('pages.company.dashboard');
		}
	}
	public function index()
	{
		$companies =  $this->companyRepository->getAllCompanies();
			
		return view('pages.company.all_company', compact('companies'));
	}

	public function create(CompanyCreate $request)
	{
		//get GPS CORORDINATES
		$address = $request->address;
		$baseUrl='https://maps.googleapis.com/maps/api/geocode/json?';
		$query = array(
			'address' => $address.", Lagos, Nigeria",
			'key' => 'AIzaSyCvwHuetVNg5JjrDS-8J_rBbjAye5pnc1M'
		);
		$url = $baseUrl . http_build_query($query);
		@$response = file_get_contents($url);
		if($response === FALSE){
			$request['gps_lat'] = $request['gps_lon'] = "";
		}else {
			$response = json_decode($response);

			if (isset($response->results[0]->geometry->location->lat)) {
				$request['gps_lat'] = $response->results[0]->geometry->location->lat;
			}

			if (isset($response->results[0]->geometry->location->lng)) {
				$request['gps_lon'] = $response->results[0]->geometry->location->lng;
			}
		}


		//processing of Images
		$userplan = Auth::user()->plan;

		$countimg = count($request->image);
		if($userplan == 1){
			//count Images
			if($countimg >3){
				session()->flash('alert-danger', 'We noticed you uploaded more than 3 images, Upgrade your plan if you want to upload more!');
				return Redirect::back()
					->withInput();
			}
		}else if($userplan > 1){

			if($countimg > 5){
				session()->flash('alert-danger', 'We noticed you uploaded more than 5 images, We currently don\'t support that much storage.');
				return Redirect::back()
					->withInput();
			}

		}
		$images = $request->file('image');
		$destinationPath = 'uploads/companies';

		foreach($images as $image){
			$extension = $image->getClientOriginalExtension();
			if(!in_array($extension,['jpg','png','gif'])){
				session()->flash('alert-danger', 'We noticed you added an image we currently don\'t support, supported formats are JPG,GIF,PNG');
				return Redirect::back()
					->withInput();
			}
			if($image->getSize() > 500000){
					session()->flash('alert-danger', 'Please each image must not be more than 500kb');
					return Redirect::back()
						->withInput();
				}
			$fileName = Carbon::now().'.'.$extension;
			$image->move($destinationPath,$fileName);
			$filenames[] = $destinationPath."/".$fileName;
		}


			$request['images'] = $filenames;
			$request['user_id'] = Auth::user()->id;

		 if($this->companyRepository->createCompany($request->all())){
			return redirect()->to('/dashboard');
		 }
	}

	public function view($id)
	{
		$company =  $this->companyRepository->getCompanyById($id);
		
		$data = [
			"company" => $company,
		];

		return view('pages.company.view', compact('data'));
	}

	public function viewpermission($id = null){
		$company = Company::where('id',$id)->first();
		if($company->status > 0){
			session()->flash('alert-danger', 'This business has been approved before!!');
			return redirect()->to('/dashboard');
		}
		return view('pages.company.permission')->with(compact('company'));
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

	public function selectPlan($id = null){
		//update user plan
		$user = User::where('id', Auth::user()->id)
			->update(['plan' => $id]);
		return redirect()->to('/business/create');
	}

	public function approve($id = null){
		$company = Company::where('id', $id)
			->update(['status' => 1]);
//remember to send sms
		return redirect()->to('/dashboard');
	}
}
