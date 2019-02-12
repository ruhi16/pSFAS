<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clss extends Model
{
    protected $guarded = [];

    public function studentcrs()
    {
        return $this->hasMany('App\Studentcr');
    }

    public function studentdbs()
    {
        return $this->hasMany('App\Studentdb','adm_clss_id','id');
    }

    public function feeschedules()
    {
        return $this->hasMany('App\Feeschedule');
    }

    public function clsssections()
    {
        return $this->hasMany('App\Clsssection');
    }
}
