<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\MentorJoinRequest;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mentors = User::where('role_id', 2)->get();

        return view('home', compact('mentors'));
    }

    public function profile($id)
    {
        $data = User::find($id);

        return view('profile', compact('data'));
    }

    public function browseMentor($name = NULL)
    {
        if(!empty($name)) {

            $mentors = User::whereHas('metaData', function($q) {
                $q->whereJsonContains('expertise', $name);
            });
            dd($mentors);
        }
        else {
            $mentors = User::where('role_id', 2)->get();
        }
        
        return view('browse-mentor', compact('data'));
    }

    public function addMentor()
    {
        return view('be-a-mentor');   
    }

    public function addMentorRequest(Request $request)
    {
        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'designation' => $request->designation,
            'qualification' => $request->qualification,
            'email' => $request->email,
            'linkedin_profile' => $request->linked_in,
            'is_experienced' => $request->experience,
            'number_of_session_per_week' => $request->weekly_session,
            'is_charged' => $request->is_charged,
            'price_per_call' => $request->price_per_session,
            'expertise' => json_encode($request->expertise)
        ];

        MentorJoinRequest::create($data);
        echo("Request Submitted Succcessfully");
    }
}