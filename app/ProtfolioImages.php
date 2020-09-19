<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProtfolioImages extends Model
{
    public function protfolios(){
    	return $this->belongsTo(Protfolio::class,'protfolio_id','id');
    }
}
 