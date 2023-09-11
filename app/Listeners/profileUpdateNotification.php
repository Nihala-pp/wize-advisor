<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\profileUpdate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Notification;
use Illuminate\Queue\InteractsWithQueue;

class profileUpdateNotification
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
    public function handle(object $event): void
    {
        $user = User::where('role_id', 3)->get();
           
        Notification::send($user, new profileUpdate($event->user));
    }
}
