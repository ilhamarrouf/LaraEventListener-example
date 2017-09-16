<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class RegisterUserMail extends Mailable
{
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Selamat Datang di ' . config('app.name'))
            ->markdown('emails.register_user');
    }
}
