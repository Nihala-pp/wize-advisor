<?php

namespace App\Http\Controllers;

use App\Mail\callReminderUser;
use App\Models\ScheduledCall;
use App\Notifications\CallReminderUserDayBefore;
use App\Notifications\CallReminderUserHourBefore;
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
                ->whereYear('date', date('Y'))
                ->whereMonth('date', date('m'))
                ->whereDay('date', date('d'))
                ->get();

            if ($calls->count() > 0) {
                foreach ($calls as $call) {
                    if ((Carbon::parse($call->start_time)->subHour()->format('H:i')) == (Carbon::now()->timezone($call->utc)->format('H:i'))) {

                        Mail::to($call->user->email)->send(new callReminderUser($call));
                        $call->user->notify(new CallReminderUserHourBefore($call->mentor));
                        Log::info('AutoCallReminderhourlyUser Successfully completed');
                    }
                }
            }

            return "Done!";
        } catch (Exception $e) {
            return "Something went wrong!";
        }
    }

    public function userReminderDayBeforeMail()
    {
        try {
            $calls = ScheduledCall::where('status', 'Approved')
                ->whereMonth('date', date('m'))
                ->whereDay('date', date('d'))
                ->get();

            if ($calls->count() > 0) {
                foreach ($calls as $call) {
                    if ((Carbon::parse($call->start_time)->subDays(1)->format('Y-m-d H:i')) == (Carbon::now()->timezone($call->utc)->format('Y-m-d H:i'))) {

                        Mail::to($call->user->email)->send(new callReminderUser($call));
                        $call->user->notify(new CallReminderUserDayBefore($call->mentor));
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