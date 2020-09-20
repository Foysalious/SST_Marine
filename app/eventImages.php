<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventImages extends Model
{
    public function protfolios(){
    	return $this->belongsTo(Events::class,'event_id','id');
    }
}
