<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded = ['id'];
    
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope('session_id', function (Builder $builder) {
    //         $builder->where('session_id', Session::where('status', 'Active')->first()->id);
    //     });
    // }


    public function getTableColumns(){
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
    
    public function getModelName(){
        return class_basename($this);
    }

    

    public function clsss(){
        return $this->hasMany('App\Clss');//->withDefault(['error' => 'Session is Not set to Active']);        
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
