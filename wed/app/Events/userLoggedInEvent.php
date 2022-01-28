<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class userLoggedInEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $cur;
    

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($cur)
    {
        $this->cur = $cur;
     
     
    }

 
}
