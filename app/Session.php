<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function clsss(){
        return $this->hasMany('App\Clss');        
    }

    public function sections(){
        return $this->hasMany('App\Section');
    }

    public function clsssections(){
        return $this->hasMany('App\Clsssection');
    }

    public function studentdbs(){     
       return $this->hasMany('App\Studentdb');
    }

    public function feeschedules(){ 
           return $this->hasMany('App\Feeschedule');
    }

    public function feecollections(){
        return $this->hasMany('App\Feecollection');
    }
}
