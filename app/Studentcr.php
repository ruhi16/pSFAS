<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentcr extends Model
{
    protected $guarded = [];
    
    public function clss()
    {
        return $this->belongsTo('App\Clss');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    public function studentdb()
    {
        return $this->belongsTo('App\Studentdb');
    }

    public function feecollections()
    {
        return $this->hasMany('App\Feecollection');
    }
}
