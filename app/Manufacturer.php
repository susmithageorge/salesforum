<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
	protected $table='manufacturers';
    
    public function products()
    {
    	return $this->hasMany('App\Products');
    }
    public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }
    public function dealers()
    {
    	return $this->hasMany('App\Dealer');
    }
    public function orders()
    {
    	return $this->hasMany('App\Order');
    }

}
