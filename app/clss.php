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

    public function feeschedules()
    {
        return $this->hasMany('App\Feeschedule');
    }

    public function clsssections()
    {
        return $this->hasMany('App\Clsssection');
    }
}
