<?php

namespace App;

class Category extends Model
{
    public function events()
    {
    	return $this->hasMany('App\Event');
    }
}
