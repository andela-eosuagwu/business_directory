<?php

namespace App\Http\Repository;

use App\Model\Blog;

class BlogRepository
{
	public function createBlog($data)
	{
		$new_blog = new Blog;

		$new_blog->title 	= $data['title'];
		$new_blog->tags 	= $data['tags'];
		$new_blog->image 	= $data['image'];
		$new_blog->article 	= $data['article'];

		$new_blog->save();
		return "blog created";	
	}

	public function getAllBlog()
	{
		return Blog::paginate(4);
	}

	public function findBlogById($id)
	{
		return Blog::with('comments')->find($id);
	}
}

