<?php

namespace App\Model;

use App\Model\Company;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [
		'name',
		'email',
		'blog_id',
		'message',
	];

	public function blog()
	{
		return $this->belongsTo('App\Model\Blog');
	}

}

