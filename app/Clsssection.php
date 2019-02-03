<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clsssection extends Model
{
    protected $guarded = ['id'];
    
    public function clss(){
        return $this->belongsTo('App\Clss');
    }

    public function section(){
        return $this->belongsTo('App\Section');
    }
}
