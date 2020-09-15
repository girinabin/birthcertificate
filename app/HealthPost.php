<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthPost extends Model
{
    protected $guarded=[];
    
    public function municipality(){
        return $this->belongsTo(Municipality::class,'municipality_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function birthapplications(){
        return $this->hasMany(BirthApplication::class,'health_post_id');
    }
}
