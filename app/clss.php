<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clss extends Model
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
}
