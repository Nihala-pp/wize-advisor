<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScheduledCall;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;


class MentorController extends Controller
{
    public function index()
    {
        $total_calls_scheduled = ScheduledCall::where('mentor_id', Auth::id())->get()->count();
        $total_calls_approved = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Approved')->get()->count();
        $total_calls_rejected = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Rejected')->get()->count();
        $total_earning= ScheduledCall::where('mentor_id', Auth::id())->sum('price');

        return view('mentors.index', compact('total_calls_scheduled','total_calls_approved','total_calls_rejected','total_earning'));
    }

    public function my_sessions()
    {
        $upcoming_sessions = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Approved')->where('date', '>=', Carbon::now())->get();
        $completed_sessions = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Approved')->where('date', '<', Carbon::now())->get();
        $requested_sessions = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Pending')->get();

        return view('mentors.sessions', compact('upcoming_sessions', 'completed_sessions', 'requested_sessions'));
    }

    public function profile()
    {
        return view('mentors.profile');
    }

    public function reviews()
    {
        $reviews = Review::where('mentor_id', Auth::id())->get();

        return view('mentors.reviews', compact('reviews'));
    }

    public function experience()
    {
        return view('mentors.experience');
    }

    public function expertise()
    {
        return view('mentors.expertise');
    }

    public function availability()
    {
        return view('mentors.availability');
    }

    public function update_status($id)
    {
       ScheduledCall::find($id)->update(['status' => 'Approved']);
    }

    public function reject_call($id)
    {
       ScheduledCall::find($id)->update(['status' => 'Rejected']);
    }
}
