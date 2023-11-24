<?php

namespace App\Listeners;

use App\Events\ChirpCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Notifications\NewChirp;
use App\Models\User;

class SendChirpCreatedNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ChirpCreated $event): void
    {
        // Sending Notification of new Chirp to all user Except the author of the Chirp
        //We've used a database cursor to avoid loading every user into memory at once.
        foreach(User::whereNot('id', $event->chirp->user_id)->cursor() as $user){

            $user->notify(new NewChirp($event->chirp));
        }
    }
}
