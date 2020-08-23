<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $typ;
    public $mesg;

    public function __construct($type,$message)
    {
        $this->typ = $type;
        $this->mesg = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_type = $this->typ;
        $e_message = $this->mesg;

        return $this->view('contact' , compact("e_message"))->subject($e_type);
    }
}
