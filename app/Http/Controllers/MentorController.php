<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ScheduledCall;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\AvailableSchedule;


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
        $profile = User::find(Auth::id());
        $scheduled_calls = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Approved')->where('date', '>=', Carbon::now())->get();

        return view('mentors.profile', compact('profile','scheduled_calls'));
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
        $timezones = AvailableSchedule::timezones();
        $weekStartDate = Carbon::parse('this monday')->toDateString();
        //    dd($weekStartDate);


        return view('mentors.availability', compact('timezones','weekStartDate'));
    }

    public function update_status($id)
    {
       ScheduledCall::find($id)->update(['status' => 'Approved']);
    }

    public function reject_call($id)
    {
       ScheduledCall::find($id)->update(['status' => 'Rejected']);
    }

    public function add_mentors($id = null)
    {
        $data = '';

        if (!empty($id)) {
            $data = User::find($id);
        }

        return view('mentors.add-mentors', compact('data'));
    }

    public function account_status(Request $request)
    {
       dd($request->all());
    }

    public function delete_account(Request $request)
    {

    }

    public function save_mentors(Request $request)
    {
        $pro_pic = time() . '.' . $request->profile_pic->getClientOriginalExtension();
        $request->profile_pic->move(public_path('public/assets/img'), $pro_pic);
        // dd($request->all());
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 2,
        ];

        $user_record = User::updateOrCreate(
            ['id' => $request->row_id],
            $data
        );

        $meta_data = [
            'user_id' => $user_record['id'],
            'mobile' => $request->phone,
            'company' => $request->company,
            'designation' => $request->designation,
            'address' => $request->address,
            'social_linked_in' => $request->linked_in,
            'youtube_link' => $request->youtube_link,
            'website_link' => $request->website_link,
            'industry' => $request->industry,
            'expertise' => json_encode($request->expertise),
            'price_per_call' => $request->price_per_call,
            'profile_pic' => $pro_pic,
            'about_me' => $request->bio,
            'company_name' => $request->company_name,
            'year' => $request->year,
            'position' => $request->position,
            'language' => json_encode($request->languages)
        ];

        UserMeta::update_user_details($request->row_id, $meta_data);
    }

    public function save_schedule(Request $request)
    {
          dd($request->all());

        //   $data = [
        //     'mentor_id' => Auth::id(),
        //     'date' => $request->date,
        //     'time_zone' => $request->time_zone,
        //     'start_time' => $request->start_time,
        //     'end_time' => $request->end_time
        // ];

        // AvailableSchedule::update_schedule($request->row_id, $data);
    }
}
