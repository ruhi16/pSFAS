<?php

namespace App;

use App\Events\FeecollectionEvent;
use Illuminate\Database\Eloquent\Model;

class Feecollection extends Model
{
    protected $guarded = [];

    protected $despatchesEvent = [
        'created' => FeecollectionEvent::class,
    ];

    public function studentcr()
    {
        return $this->belongsTo('App\Studentcr');
    }

    public function feeschedule()
    {
        return $this->belongsTo('App\Feeschedule');
    }
}
