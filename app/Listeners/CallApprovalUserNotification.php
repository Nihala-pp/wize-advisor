<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\CallApprovalUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notification;

class CallApprovalUserNotification
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
           
        Notification::send($user, new CallApprovalUser($event->user));
    }
}