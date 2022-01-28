<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\myMail;
use App\User;
use Auth;
class mailLoggedInUserListener
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

        $myMail = new myMail(
            'Sign in',
            $event->cur->first_name,
            'You have successfully signed-in, if you believe you did not initiate this
            process, kindly contact us to change your password'
        );

        Mail::to($user->email)->send($myMail);
    }
}
