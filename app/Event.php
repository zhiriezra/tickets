<?php

namespace App;

class Event extends Model
{

	protected $dates = [
    'created_at',
    'updated_at',
    'event_date',
	];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
