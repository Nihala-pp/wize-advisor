<?php

namespace App\Http\Controllers;

use App\Mail\callReminder;
use App\Models\AvailableSchedule;
use Illuminate\Http\Request;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Log;
class CallReminderMentorController extends Controller
{
    public function delayedtask()
    {
        try {
            $calls = AvailableSchedule::where('is_booked', 1)
                ->whereYear('date', date('Y'))
                ->whereMonth('date', date('m'))
                ->whereDay('date', date('d'))
                ->get();

            if ($calls->count() > 0) {
                foreach ($calls as $call) {
                    if ((Carbon::parse($call->start_time)->subHour()->format('H:i')) == (Carbon::now()->timezone($call->time_zone)->format('H:i'))) {

                        Mail::to($call->user->email)->send(new callReminder($call));
                        Log::info('AutoCallReminderhourlyMentor Successfully completed');
                    }
                }
            }
            return "Done!";
        } catch (Exception $e) {
            return "Something went wrong!";
        }
    }
}