<?php

namespace App\Model;

use App\Model\Company;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $fillable = [
		'title',
		'image',
		'article',
		'tags',
	];


	protected $casts = [
		'tags' => 'json'
	];
}

