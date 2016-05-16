<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
	public function author()
    {
   		return $this->belongsTo('User');
   	}
}
