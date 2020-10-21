<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_of_company', 'resident_of_RK','BIN', 'manager_name','company_email','password','code',
        'country','type_of_organization_id','real_locality_id','juridical_locality_id',
        'real_address','juridical_address','performer_name','email',
        'phone','approved','type_of_agency'
    ];

    /**
     *
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function documents(){
        return $this->hasMany('App\UserDocument');
    }

    public function applications(){
        return $this->hasMany('App\Application');
    }

    public function bank_requisites(){
        return $this->hasMany('App\BankRequisites');
    }
    public function juridical_locality(){
        return $this->belongsTo('App\Locality','juridical_locality_id');
    }
    public function real_locality(){
        return $this->belongsTo('App\Locality','real_locality_id');
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
        return [];
    }
}
