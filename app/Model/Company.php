<?php

namespace App\Model;

use App\Model\Reviews;
use Illuminate\Database\Eloquent\Model;


class Company extends Model
{

	protected $fillable = [
		'tags',
		'type',
		'name',
		'status',
		'user_id',
		'images',
		'address',
		'description',
	];

	protected $casts = [
		'tags' 		=> 'json',
		'images' 	=> 'json',
		'address' 	=> 'json',
	];

	public function category(){
		return $this->belongsTo(Category::class);
	}
	
	public function reviews()
	{
		return $this->hasMany('App\Model\Review');
	}
}

