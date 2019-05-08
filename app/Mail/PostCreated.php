<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $image;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($image)
    {
        $this->$image = $image;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.post-created');
    }
}
