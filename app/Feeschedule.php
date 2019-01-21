<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feeschedule extends Model
{
    protected $guarded = [];

    public function clss()
    {
        return $this->belongsTo('App\Clss');
    }
}
