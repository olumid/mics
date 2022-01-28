<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class myMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $content;
    public $firstname;
  

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $firstname, $content)
    {
        $this->subject = $subject;
        $this->firstname = $firstname;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('myMail')->subject($this->subject);
    }
}
