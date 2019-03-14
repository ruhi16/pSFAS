<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class School extends Model
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
}
