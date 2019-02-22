<?php

namespace App;

use App\Session;

use App\Events\FeecollectionCreatedEvent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('session_id', function (Builder $builder) {
            $builder->where('session_id', Session::where('status', 'Active')->first()->id);
        });
    }
}
