<?php

namespace App\Listeners;

use App\Events\NewChirpCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Models\User;
use App\Notifications\NewNotification;

class sendNotification implements ShouldQueue
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
    public function handle(NewChirpCreated $event): void
    {
        //
        foreach (User::whereNot('id', $event->chirp->user_id)->cursor() as $user) {
            $user->notify(new NewNotification($event->chirp));
        }
    }
}
