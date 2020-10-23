<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    public $timestamps = false;

    public $fillable = [
        'user_id',
        'path',
        'title'
    ];
}
