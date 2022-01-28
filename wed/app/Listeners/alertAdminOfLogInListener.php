<?php

namespace App\Listeners;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\myMail;
use App\User;
use Auth;
class alertAdminOfLogInListener
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user1 = User::where('id', 8)->first();
        $user = Auth::user();

        $message = $user->username.' with the user ID: '
        .$user->id.' logged in on ' .Carbon::today()->toDateString().' at exactly '.Carbon::now()->toTimeString();
        
        $user1->notify(new \App\Notifications\updateAdmin($user, $message));
    }
}
