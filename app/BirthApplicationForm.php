<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BirthApplicationForm extends Model
{
    protected $guarded=[];
    public function certificate(){
        return $this->hasOne(CertificateOfBirth::class,'birth_application_form_id');
    }

    public function healthPost(){
        return $this->belongsTo(HealthPost::class,'health_post_id');
    }

    
}
