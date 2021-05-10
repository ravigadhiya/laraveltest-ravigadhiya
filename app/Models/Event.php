<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	
	protected $table = 'events';
	
	public function workshop()
    {
        return $this->hasMany('App\Models\Workshop');
    }
	
	public function upcoming_workshop()
    {
		$todayDate = \Carbon\Carbon::now();
		return $this->workshop()->where('start','>',$todayDate);
    }
	
	
}
