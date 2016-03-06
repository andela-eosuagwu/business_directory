<?php

namespace App\Model;

use App\Model\Company;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [
		'name',
		'email',
		'message',
	];

}

