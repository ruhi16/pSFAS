<?php

namespace App;

use App\Session;

use App\Events\FeecollectionCreatedEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;

class Feecollection extends Model
{
    use Notifiable;

    protected $guarded = [];
    
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('session_id', function (Builder $builder) {
            $builder->where('session_id', Session::where('status', 'Active')->first()->id);
        });
    }


    public function getTableColumns()
    {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
    
    public function getModelName(){
        return class_basename($this);
    }
    
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

    public function session(){
        return $this->belongsTo('App\Session');
    }
}
