<?php

namespace App;

use App\Events\FeecollectionCreatedEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Feecollection extends Model
{
    use Notifiable;

    protected $guarded = [];

    // protected $dispatchesEvents = [
    //     'created' => FeecollectionCreatedEvent::class
    // ];

    public function studentcr()
    {
        return $this->belongsTo('App\Studentcr');
    }

    public function feeschedule()
    {
        return $this->belongsTo('App\Feeschedule');
    }
}
