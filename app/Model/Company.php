<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

	protected $fillable = [
		'tags',
		'type',
		'logo',
		'name',
		'user_id',
		'images',
		'address',
		'description',
	];

	protected $casts = [
		'tags' 		=> 'json',
		'images' 	=> 'json'
	];
}

/*
address will be an array

*/