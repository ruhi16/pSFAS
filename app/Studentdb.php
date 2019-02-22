<?php

namespace App;

use App\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Studentdb extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('session_id', function (Builder $builder) {
            $builder->where('session_id', Session::where('status', 'Active')->first()->id);
        });
    }


    public function studentcrs()
    {
        return $this->hasMany('App\Studentcr');
    }

    public function clss()
    {
        return $this->belongsTo('App\Clss','adm_clss_id','id');
    }

    public function session(){
        return $this->belongsTo('App\Session');
    }
}
