<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $timestamps = false;
    public function districts(){
        return $this->hasMany("App\District");

    }
    public function localities(){
        return $this->hasMany("App\Locality");
    }
}
