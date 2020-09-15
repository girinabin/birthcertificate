<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificateOfBirth extends Model
{
    protected $guarded = [];
    public function birthApplication(){
        return $this->belongsTo(BirthApplication::class,'birth_application_form_id');
    }
}
