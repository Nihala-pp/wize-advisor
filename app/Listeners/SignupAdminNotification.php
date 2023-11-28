<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\SignupAdmin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notification;


class SignupAdminNotification
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
           
        Notification::send($user, new SignupAdmin($event->user));
    }
}
