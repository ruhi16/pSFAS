<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Clss extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('next_clss_id', function (Builder $builder) {
            $builder->where('next_clss_id', '>', 2);
        });
    }



    public function studentcrs()
    {
        return $this->hasMany('App\Studentcr');
    }

    public function studentdbs()
    {
        return $this->hasMany('App\Studentdb','adm_clss_id','id');
    }

    public function feeschedules()
    {
        return $this->hasMany('App\Feeschedule');
    }

    public function clsssections()
    {
        return $this->hasMany('App\Clsssection');
    }
}
