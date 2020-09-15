<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function healthPosts(){
        return $this->hasMany(HealthPost::class,'municipality_id');
    }
}
