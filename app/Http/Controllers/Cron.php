<?php

namespace App\Http\Controllers;

use App\Mail\callReminder;
use App\Mail\callReminderUser;
use App\Mail\completedCallMentor;
use App\Mail\feedbackEmailUser;
use App\Mail\weeklySlotUpdate;
use App\Models\AvailableSchedule;
use App\Models\ScheduledCall;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class Cron extends Controller
{
    public function index()
    {
        $this->completedCalls();
        $this->callFeedBack();
        $this->callReminder();
        $this->callReminderUser();

        // $this->weeklySlotUpdate();
    }

    public function completedCalls()
    {
        $completed_sessions = ScheduledCall::where('status', 'Approved')
        ->whereYear('date', date(format: 'Y'))
        ->whereMonth('date', date('m'))
        ->whereDay('date', date('d'))
        ->get();

        foreach ($completed_sessions as $completed_session) {
            $mentor_timezone = AvailableSchedule::where('mentor_id', $completed_session->mentor_id)
            ->where('date', $completed_session->date)->first();

            $user_timezone = new \DateTime($completed_session->date . ' ' . $completed_session->start_time, new \DateTimeZone($completed_session->utc));

            $user_timezone->setTimezone(new \DateTimeZone($mentor_timezone->time_zone));

            $mentor_finish_time = Carbon::parse($user_timezone->format('H:i:s'))->addMinutes($completed_session->duration);

            $current_time = Carbon::now()->timezone($mentor_timezone->time_zone);

            if (date($completed_session->date . ' ' . $mentor_finish_time->format('H:i:s')) < $current_time) {
                
                $details = [
                    'mentor_name' => $completed_session->mentor->name,
                    'user_name' => $completed_session->user->name,
                  ];
                                    
                  Mail::to($completed_session->mentor->email)->send(new completedCallMentor($details));
            }
        }
    }

    public function callFeedBack()
    {
        $completed_sessions = ScheduledCall::where('status', 'Approved')
        ->whereYear('date', date(format: 'Y'))
        ->whereMonth('date', date('m'))
        ->whereDay('date', date('d'))
        ->get();

        foreach ($completed_sessions as $completed_session) {

            $user_finish_time = Carbon::parse($completed_session->end_time)->addHour();

            $current_time = Carbon::now()->timezone($completed_session->utc);

            if (date($completed_session->date . ' ' . $user_finish_time->format('H:i')) < $current_time) {
                
                $details = [
                    'mentor_name' => $completed_session->mentor->name,
                    'user_name' => $completed_session->user->name,
                  ];
                                    
                  Mail::to($completed_session->user->email)->send(new feedbackEmailUser($details));
            }
        }
    }

    public function callReminder()
    {
        $calls = AvailableSchedule::where('is_booked', 1)
            ->whereYear('date', date('Y'))
            ->whereMonth('date', date('m'))
            ->whereDay('date', date('d'))
            ->get();

        if ($calls->count() > 0) {
            foreach ($calls as $call) {
                if(((Carbon::parse($call->start_time)->subHour()->format('H:i')) <= (Carbon::now()->timezone($call->time_zone)->format('H:i'))) && ((Carbon::parse($call->end_time)->format('H:i')) > (Carbon::now()->timezone($call->time_zone)->format('H:i')))) {
                    Mail::to($call->user->email)->send(new callReminder($call));                  
                }
            }
        }

        return 0;
    }

    public function  callReminderUser() 
    {
        $calls = ScheduledCall::where('status', 'Approved')
            ->whereYear('date', date('Y'))
            ->whereMonth('date', date('m'))
            ->whereDay('date', date('d'))
            ->get();

        if ($calls->count() > 0) {
            foreach ($calls as $call) {
                if ((Carbon::parse($call->start_time)->subHour()->format('H:i')) <= (Carbon::now()->timezone($call->utc)->format('H:i')) && ((Carbon::parse($call->end_time)->format('H:i')) > (Carbon::now()->timezone($call->utc)->format('H:i')))) {

                    Mail::to($call->user->email)->send(new callReminderUser($call));
                }
            }
        }

        return 0;
    }

    public function weeklySlotUpdate()
    {
         $mentors = User::where('role_id', 2)->get();

         foreach($mentors as $mentor)
         {
            Mail::to($mentor->email)->send(new weeklySlotUpdate($mentor));
         }
    }
}