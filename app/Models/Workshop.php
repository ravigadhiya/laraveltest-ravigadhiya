<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{

	protected $table = 'workshops';
	
	public function event()
    {
        return $this->belogsTo('App\Models\Event');
    }
}
