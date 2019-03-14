<?php

namespace App;

use App\Session;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Studentcr extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('session_id', function (Builder $builder) {
            $builder->where('session_id', Session::where('status', 'Active')->first()->id);
        });
    }
    public function getModelName(){
        return class_basename($this);
    }
    
    public function getTableColumns()
    {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
    
    public function clss()
    {
        return $this->belongsTo('App\Clss');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    public function studentdb()
    {
        return $this->belongsTo('App\Studentdb');
    }

    public function feecollections()
    {
        return $this->hasMany('App\Feecollection');
    }
}
