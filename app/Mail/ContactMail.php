<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    private $name;
    private $email;
    private $message;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $email
     * @param $message
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from($this->email, $this->name)
            ->subject('Taxi stranica - nova poruka')
            ->view('mail.contact')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'mailMessage' => $this->message
            ]);
    }
}
