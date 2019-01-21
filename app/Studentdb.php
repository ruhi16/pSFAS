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
}
