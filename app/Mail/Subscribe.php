<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Subscribe extends Mailable
{
    use Queueable, SerializesModels;
    public $topic;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($topic)
    {
        $this->topic = $topic;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.subscribe')
        ->subject('More info about '. $this->topic);
    }
}
