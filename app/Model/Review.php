<?php

namespace App\Model;

use App\Model\Company;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = [
		'name',
		'email',
		'message',
	];

	public function company()
	{
		return $this->belongsTo(Company);
	}
}

