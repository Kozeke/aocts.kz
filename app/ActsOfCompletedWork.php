<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActsOfCompletedWork extends Model
{
    protected $fillable = ['application_id','act_start_date','act_end_date','number_of_ABP','payment','status'];

public function scopeFilter($query,$filters)
{
    if(isset($filters['end_date'])) {
        $query->whereDate('act_start_date', '<=', $filters['end_date']);

    }
    if(isset($filters['start_date'])) {
        $query->whereDate('act_end_date', '>=', $filters['start_date']);
    }

    if(isset($filters['application_id'])) {
        $query->where('application_id', $filters['application_id']);
    }
    return $query;
}
}
