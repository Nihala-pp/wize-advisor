<?php

namespace App\Console\Commands;

use App\Mail\callReminderUser;
use App\Models\ScheduledCall;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class AutoCallReminderhourlyUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:auto-call-reminderhourly-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $calls = ScheduledCall::where('status', 'Approved')
            ->whereMonth('date', date('m'))
            ->whereDay('date', date('d'))
            ->get();

        if ($calls->count() > 0) {
            foreach ($calls as $call) {
                Mail::to($call->user->email)->send(new callReminderUser($call));
            }
        }

        return 0;
    }
}