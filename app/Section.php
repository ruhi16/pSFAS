<?php

namespace App;

use App\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Section extends Model
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
    
    public function getTableColumns(){
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }







    public function clsssections()
    {
        return $this->hasMany('App\Clsssection');
    }

    public function studentcrs()
    {
        return $this->hasMany('App\Studentcr');
    }

    public function session(){
        return $this->belongsTo('App\Session');
    }
}
