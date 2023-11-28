<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\NewCallRequestAdmin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notification;


class NewCallRequestAdminNotification
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
           
        Notification::send($user, new NewCallRequestAdmin($event->user));
    }
}
