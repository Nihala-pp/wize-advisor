<?php

namespace App\Listeners;

use App\Notifications\CustomNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Illuminate\Notifications\Notification;

class SendNewUserNotification
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
        $admins = User::whereHas('roles', function ($query) {
            $query->where('id', 1);
        })->get();

        Notification::send($admins, new CustomNotification($event->user));
    }
}
