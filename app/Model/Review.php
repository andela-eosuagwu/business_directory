<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

	protected $fillable = [
		'name',
		'email',
		'message',
	];
}

