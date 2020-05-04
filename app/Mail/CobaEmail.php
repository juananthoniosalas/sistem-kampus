<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CobaEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from('sender@cobaemail.com')
                ->view('emailku')
                ->with(
                 [
                     'nama' => 'Juan Anthonio Salas',
                     'website' => 'https://www.instagram.com/history.ui',
                 ]);
    }
}
