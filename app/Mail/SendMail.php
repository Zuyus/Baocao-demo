<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $dt;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dt)
    {
        $this->subject = 'Reply from Zairito';
        $this->dt = $dt;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('admin.pages.mail.reply_message');
    }
}
