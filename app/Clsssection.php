<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Clsssection extends Model
{
    protected $guarded = ['id'];


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

    

    public function clss(){
        return $this->belongsTo('App\Clss');
    }

    public function section(){
        return $this->belongsTo('App\Section');
    }

    public function session(){
        return $this->belongsTo('App\Session');
    }
}
