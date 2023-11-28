<?php

namespace App\Providers;

use App\Listeners\CallApprovalUserNotification;
use App\Listeners\CallRejectedAdminNotification;
use App\Listeners\CallRejectedUserNotification;
use App\Listeners\NewCallApprovedAdminNotification;
use App\Listeners\NewCallRequestAdminNotification;
use App\Listeners\NewCallRequestNotification;
use App\Listeners\passwordChangeNotification;
use App\Listeners\profileUpdateNotification;
use App\Listeners\ReviewAdminNotification;
use App\Listeners\SignupAdminNotification;
use App\Listeners\SlotUpdateNotification;
use App\Listeners\TimeSlotAdminNotification;
use App\Listeners\UpdateSessionAdminNotification;
use App\Notifications\CustomNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use App\Listeners\SendNewUserNotification;
use App\Listeners\NewReviewNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            SendNewUserNotification::class,
            NewReviewNotification::class,
            NewCallRequestNotification::class,
            CallApprovalUserNotification::class,
            CallRejectedUserNotification::class,
            SlotUpdateNotification::class,
            profileUpdateNotification::class,
            passwordChangeNotification::class,
            ReviewAdminNotification::class,
            SignupAdminNotification::class,
            TimeSlotAdminNotification::class,
            UpdateSessionAdminNotification::class,
            NewCallRequestAdminNotification::class,
            NewCallApprovedAdminNotification::class,
            CallRejectedAdminNotification::class

        ],
        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\LogSuccessfulLogin',
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
