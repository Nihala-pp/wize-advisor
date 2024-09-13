<?php

namespace App\Http\Controllers;

use App\Models\ScheduledCall;
use App\Notifications\CallCompletedUser;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Log;
use App\Mail\feedbackEmailUser;

class CallFeedbacksMailController extends Controller
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

                $user_finish_time = Carbon::parse($completed_session->end_time)->addHour()->format('Y-m-d H:i');

                $current_time = Carbon::now()->timezone($completed_session->utc)->format('Y-m-d H:i');

                if ($user_finish_time == $current_time) {

                    $details = [
                        'mentor_name' => $completed_session->mentor->name,
                        'user_name' => $completed_session->user->name,
                    ];

                    Mail::to($completed_session->user->email)->send(new feedbackEmailUser($details));
                    $completed_session->user->notify(new CallCompletedUser($completed_session->mentor));
                    Log::info('feedback mail Successfully send');
                }
            }
            return "Done!";
        } catch (Exception $e) {
            return "Something went wrong!";
        }
    }
}