<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\NewCallRequest;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notification;

class NewCallRequestNotification
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
        $mentors = User::where('role_id', 2)->get();
           
        Notification::send($mentors, new NewCallRequest($event->user));
    }
}