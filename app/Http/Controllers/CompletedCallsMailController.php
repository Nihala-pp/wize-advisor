<?php

namespace App\Http\Controllers;

use App\Models\ScheduledCall;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Log;
use App\Models\AvailableSchedule;
use App\Mail\completedCallMentor;

class CompletedCallsMailController extends Controller
{
    public function index()
    {
        try {
            $completed_sessions = ScheduledCall::where('status', 'Approved')
               ->whereYear('date', date('Y'))
               ->whereMonth('date', date('m'))
                ->whereDay('date', date('d'))
                ->get();

            foreach ($completed_sessions as $completed_session) {
                $mentor_timezone = AvailableSchedule::where('mentor_id', $completed_session->mentor_id)->where('date', $completed_session->date)->first();

                $user_timezone = new \DateTime($completed_session->date . ' ' . $completed_session->start_time, new \DateTimeZone($completed_session->utc));

                $user_timezone->setTimezone(new \DateTimeZone($mentor_timezone->time_zone));

                $mentor_finish_time = Carbon::parse($user_timezone->format('H:i'))->addMinutes($completed_session->duration)->format('Y-m-d H:i');

                $current_time = Carbon::now()->timezone($mentor_timezone->time_zone)->format('Y-m-d H:i');

                if ($mentor_finish_time == $current_time) {

                    $details = [
                        'mentor_name' => $completed_session->mentor->name,
                        'user_name' => $completed_session->user->name,
                    ];

                    Mail::to($completed_session->mentor->email)->send(new completedCallMentor($details));
                    Log::info('mail after call completion Successfully send');
                }
            }
            return "Done!";
        } catch (Exception $e) {
            return "Something went wrong!";
        }
    }
}