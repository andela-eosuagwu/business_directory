<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

	protected $fillable = [
		'user_id',
		'name',
		'images',
		'description',
	];

	protected $cast = [
		'images'
	]
}