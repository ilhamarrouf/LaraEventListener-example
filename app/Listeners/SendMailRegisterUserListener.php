<?php

namespace App\Listeners;

use App\Mail\RegisterUserMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;

class SendMailRegisterUserListener
{
    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        Mail::to($event->user->email)->send(new RegisterUserMail($event->user));
    }
}
