<?php

namespace App\Listeners;

use App\Notifications\CallReminderUserHourBefore;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notification;
use App\Models\User;

class CallReminderUserHourBeforeNotification
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
           
        Notification::send($user, new CallReminderUserHourBefore($event->user));
    }
}