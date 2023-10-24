<?php

namespace App\Http\Controllers;

use App\Mail\callReminderUser;
use App\Models\ScheduledCall;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Log;

class CallReminderUserController extends Controller
{

    public function userReminderMail()
    {
        try {
            $calls = ScheduledCall::where('status', 'Approved')
                ->whereMonth('date', date('m'))
                ->whereDay('date', date('d'))
                ->get();

            if ($calls->count() > 0) {
                foreach ($calls as $call) {
                    if ((Carbon::parse($call->start_time)->subHour()->format('H:i:s')) == (Carbon::now()->timezone($call->utc)->format('H:i:s'))) {

                        Mail::to($call->user->email)->send(new callReminderUser($call));
                        Log::info('AutoCallReminderhourlyUser Successfully completed');
                    }
                }
            }

            return "Done!";
        } catch (Exception $e) {
            return "Something went wrong!";
        }
    }
}