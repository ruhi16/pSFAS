<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function clsss(){
        return $this->hasMany('App\Clss');        
    }
}
