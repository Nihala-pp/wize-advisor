<?php

namespace App\Listeners;

use App\Notifications\UpdateSessionAdmin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Notification;

class UpdateSessionAdminNotification
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
           
        Notification::send($user, new UpdateSessionAdmin($event->user));
    }
}
