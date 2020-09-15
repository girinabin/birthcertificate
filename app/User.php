<?php

namespace App;

use Box\Spout\Common\Entity\Row;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function municipality(){
        return $this->hasOne(Municipality::class,'user_id');
    }

    public function healthPost(){
        return $this->hasOne(HealthPost::class,'user_id');
    }

    public function roles(){
        return $this->belongsToMany(Role::class,'user_roles');
    }
}

