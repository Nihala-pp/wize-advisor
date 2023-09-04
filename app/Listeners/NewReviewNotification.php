<?php

namespace App\Listeners;

use App\Notifications\NewReview;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notification;
use App\Listeners\SendNewUserNotification;
use App\Models\User;


class NewReviewNotification
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
           
        Notification::send($mentors, new NewReview($event->user));
    }
}