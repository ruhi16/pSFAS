<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Feecollection;

class FeecollectionCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public function __construct(Feecollection $feecollection)
    {
        // dd("FeeCollection event spacrked, .....a new Record is entered!!!! ");
    }
    
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
