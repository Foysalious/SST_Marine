<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protfolio extends Model
{
    public function images(){
    	return $this->hasMany(ProtfolioImages::class);
    }
} 
 