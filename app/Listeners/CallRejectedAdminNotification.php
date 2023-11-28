<?php

namespace App\Listeners;

use App\Notifications\CallRejectedAdmin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notification;
use App\Models\User;

class CallRejectedAdminNotification
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
        $user = User::where('role_id', 1)->get();
           
        Notification::send($user, new CallRejectedAdmin($event->user));
    }
}
