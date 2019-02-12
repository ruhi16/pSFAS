<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function clsssections()
    {
        return $this->hasMany('App\Clsssection');
    }

    public function studentcrs()
    {
        return $this->hasMany('App\Studentcr');
    }
}
