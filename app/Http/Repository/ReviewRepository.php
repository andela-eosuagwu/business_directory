<?php

namespace App\Http\Repository;

use App\Model\Review;

class ReviewRepository
{

	public function addReview($data)
	{
		
		$new_review = new Review;

		$new_review->name 		= $data['name'];		
		$new_review->email 		= $data['email'];		
		$new_review->message 	= $data['message'];		
		$new_review->company_id 	= $data['company_id'];		

		$new_review->save();
		
	}
	
}