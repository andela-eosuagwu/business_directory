<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

	public function index()
	{
		$blogs = $this->blogRepository->getAllBlog();

		return view('pages.blog.index', compact('blogs'));
	}

	public function create()
	{
		$data = [
			"tags" 		=> ['schscsd', 'fwefwefawe', 'fweferfer'],
			"title" 		=>"some title",
			"image" 	=> "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSQ4vVRsQIuGwsqQAqYuxbNvc4I_MNhMOYavux4Ct9ocZni3wDGtg",
			"article" 	=> "fekrjfkeajraerjkerkj",
		];

		return $this->blogRepository->createBlog($data);
	}
}
