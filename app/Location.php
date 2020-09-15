<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $fillable = [
        // 'Provience_NP',
        // 'District_NP',
        // 'LocalLevel_NP',
        // 'Provience',
        // 'District',
        // 'LocalLevel'
        'provience_np','district_np','locallevel_np','provience','district','locallevel'
    ];
}
