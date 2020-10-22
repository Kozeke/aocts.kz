<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    protected $fillable = [
        'application_id', 'business_index', 'address','access_road','amount_of_carriage_on_loading','amount_of_carriage_on_unloading',
        'size_of_the_simultaneous_supply_of_wagons','carriage_address','agreement_start_date','agreement_end_date','performer','bank_req_id'
    ];
}
