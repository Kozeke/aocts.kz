<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    public $timestamps = false;

    public function regions(){
        return $this->belongsTo('App\Region','region_id');
    }
    public function districts(){
        return $this->belongsTo('App\District','district_id');
    }
}

