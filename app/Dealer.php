<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
	public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
    
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
