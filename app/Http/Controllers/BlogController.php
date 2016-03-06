<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

	public function index()
	{
		//$blogs = $this->blogRepository->getAllBlog();
		$blog = $this->blogRepository->findBlogById(1);
		return view('pages.blog.index', compact('blog'));
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

	public function view($id)
	{
		$blog = $this->blogRepository->findBlogById($id);
		return view('pages.blog.view', compact('blog'));
	}

	public function comment(Request $request)
	{	
		return $this->commentRepository->saveComment($request->all());
	}
}
