<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $timestamps = false;
    public function localities(){
        return $this->hasMany("App\Locality");
    }
}
