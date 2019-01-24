<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feecollection extends Model
{
    protected $guarded = [];

    public function studentcr()
    {
        return $this->belongsTo('App\Studentcr');
    }

    public function feeschedule()
    {
        return $this->belongsTo('App\Feeschedule');
    }
}
