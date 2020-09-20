<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    public function images(){
    	return $this->hasMany(eventImages::class);
    }
}
