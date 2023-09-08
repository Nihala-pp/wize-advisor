<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\CallRejectedUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notification;

class CallRejectedUserNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    public function handle(object $event): void
    {
        $user = User::where('role_id', 3)->get();
           
        Notification::send($user, new CallRejectedUser($event->user));
    }
}
