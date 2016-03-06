<?php

namespace App\Http\Repository;

use App\Model\Comment;

class CommentRepository
{
	public function saveComment($data)
	{
		$new_comment = new Comment;

		$new_comment->name 		= $data['name'];
		$new_comment->email 		= $data['email'];
		$new_comment->blog_id 		= $data['blog_id'];
		$new_comment->message 	= $data['message'];

		$new_comment->save();
		return "blog created";	
	}
}

