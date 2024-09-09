<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ScheduledCall;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    
    public function contactuspage()
    {
        return view('contatcus-test');
    }

    public function aboutuspage()
    {
        return view('aboutus-test');
    }

    public function beAMentor()
    {
        return view('be-a-mentor-test');
    }

    public function homeTest()
    {
       $mentors = User::where('role_id', 2)->whereNull('status')->get();
       $users =   User::where('role_id', 3)->get()->count();
       $calls =   ScheduledCall::where('is_paid', 1)->get()->count();
       $reviews = Review::where('is_approved', 0)->get();
       $completed_sessions = ScheduledCall::where('status', 'Approved')->where('is_paid', 1)->get()->count() * 30;


    if (Auth::id() && auth()->user()->role_id == 3) {
         if (Auth::user()->metaData) {
             return redirect()->route('user.dashboard')->withSuccess('You have Successfully loggedin');
         } else {
             return redirect()->route('user.personalInfo', [Auth::id()])->withSuccess('You have Successfully loggedin');
          }
    } else {
        return view('test', compact('mentors', 'users', 'calls', 'reviews', 'completed_sessions'));
    }
  }

  public function test()
  {
     
     return view('users.dashboard-test');
     
  }
}