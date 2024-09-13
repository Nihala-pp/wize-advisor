<?php

namespace App\Console\Commands;

use App\Mail\callReminder;
use App\Models\AvailableSchedule;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Log;

class AutoCallReminderhourlyMentor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:auto-call-reminderhourly-mentor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $calls = AvailableSchedule::where('is_booked', 1)
            ->whereYear('date', date('Y'))
            ->whereMonth('date', date('m'))
            ->whereDay('date', date('d'))
            ->get();

        if ($calls->count() > 0) {
            foreach ($calls as $call) {
                if((Carbon::parse($call->start_time)->subHour()->format('H:i:s')) == (Carbon::now()->timezone($call->time_zone)->format('H:i:s'))) {

                    Mail::to($call->user->email)->send(new callReminder($call));    
                    Log::info('AutoCallReminderhourlyMentor Successfully completed');              
                }
            }
        }

        return 0;
    }
}