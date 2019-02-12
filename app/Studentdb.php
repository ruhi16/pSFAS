<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentdb extends Model
{
    protected $guarded = [];

    public function studentcrs()
    {
        return $this->hasMany('App\Studentcr');
    }

    public function clss()
    {
        return $this->belongsTo('App\Clss','adm_clss_id','id');
    }
}
