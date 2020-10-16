<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankRequisites extends Model
{
    protected $fillable = [
        'user_id', 'IBAN', 'bank_name','BIC','CB'
    ];
}
