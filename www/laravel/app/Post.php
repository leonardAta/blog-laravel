<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	//protected $fillable = ["author", "title", "body"];
	protected $guarded = [];

	public function comments() {

	//fetches a mixture of everything in the db
	//(App\Comment)
    return $this->hasMany(Comment::class);

	}
}
