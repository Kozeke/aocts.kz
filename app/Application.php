<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'user_id', 'station', 'access_road','dead_end','wagon_turnover_per_year','wagon_turnover_per_month',
        'access_road_grant_date','status','performer'
    ];
}
