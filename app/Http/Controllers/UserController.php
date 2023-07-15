<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\ScheduledCall;
use App\Models\AvailableSchedule;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\Review;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Mail\ScheduleCallRequest;
use App\Mail\ScheduleCallRequestUser;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        // $total_calls_scheduled = ScheduledCall::where('mentor_id', Auth::id())->get()->count();
        // $total_calls_approved = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Approved')->get()->count();
        // $total_calls_rejected = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Rejected')->get()->count();
        // $total_earning= ScheduledCall::where('mentor_id', Auth::id())->sum('price');

        $upcoming_sessions =  ScheduledCall::where('user_id', Auth::id())->where('status', 'Approved')->where('date', '>=', Carbon::now())->get();
        $completed_sessions = ScheduledCall::where('user_id', Auth::id())->where('status', 'Approved')->where('date', '<', Carbon::now())->get();
        $requested_sessions = ScheduledCall::where('user_id', Auth::id())->where('status', 'Pending')->get();
        $expertise =  auth()->user()->metaData->expertise;
        $suggested_mentors = User::where('role_id', 2)
          ->whereHas('metaData', function($q) use($expertise) {
            $q->where('expertise', 'LIKE', '%'.$expertise.'%');
          })->get();

        return view('users.index', compact('upcoming_sessions','completed_sessions','requested_sessions','suggested_mentors'));
    }

    public function review($id)
    {

        return view('users.review', compact('id'));
    }

    public function saveReview(Request $request)
    {
        Review::create([
          'user_id' => Auth::id(),
          'mentor_id' => $request->mentor,
          'review' => $request->comment,
          'rating' => $request->rating,
        ]);
    }

    public function updateSchedule($id)
    {
        $scheduled_call = ScheduledCall::find($id);
        $utc = AvailableSchedule::timezones();
        $times = AvailableSchedule::where('mentor_id', $scheduled_call->mentor_id)->where('date', $scheduled_call->date)->get();

        return view('users.update-schedule', compact('scheduled_call','utc','times'));
    }

    public function saveSchedule(Request $request)
    {
        $scheduled_call = ScheduledCall::find($request->row_id);
        $end_time =  Carbon::parse($request->start_time)->addMinutes($scheduled_call->duration);
        $finish_time = $end_time->toTimeString();

        $details = ScheduledCall::find($request->row_id)->update([
            'user_id' => Auth::id(),
            'mentor_id' => $scheduled_call->mentor_id,
            'price' => $scheduled_call->price,
            'date' => $request->date,
            'duration' => $scheduled_call->duration,
            'start_time' => $request->start_time,
            'end_time' => $finish_time,
            'utc' => $request->utc,
            'status' => 'Pending',
            'description' =>  $request->description,
            'documents' => $request->documents
        ]);

        $this->sendScheduleRequestMail($details);
        $this->sendScheduleRequestUserMail($details);
    }

    public function sendScheduleRequestMail($details)
    {
       $mentor = User::find($details['mentor_id']);

       Mail::to($mentor->email)->send(new ScheduleCallRequest($details));

      //  dd("Email is sent successfully.");
    }

    public function sendScheduleRequestUserMail($details)
    {
       $mentor = User::find($details['mentor_id']);

       Mail::to($mentor->email)->send(new ScheduleCallRequestUser($details));

      //  dd("Email is sent successfully.");
    }
}