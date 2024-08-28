<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    $users = User::where('role_id', 3)->get()->count();
    $calls = ScheduledCall::where('is_paid', 1)->get()->count();
    $reviews = Review::where('id', 7)->first();
    $review1 = Review::where('id', 8)->first();
    $review2 = Review::where('id', 15)->first();
    $review3 = Review::where('id', 14)->first();
    $review4 = Review::where('id', 16)->first();
    $review5 = Review::where('id', 9)->first();

    //   Sumedha => GTM-Strategy, Brand-Strategy,
    //   Soha => Growth-Strategy, Storytelling,
    //   Michelle => Fundraising, Business-Strategy,
    //   Cien => Growth-Marketing, Idea-Validation,
    //   Nevra => GTM-Strategy, Marketing-Strategy,
    //   Lucile => E-Commerce, B2B,
    //   Svetlana => MVP-Strategy, Idea-Validation
    // ];

    if (Auth::id() && auth()->user()->role_id == 3) {
      if (Auth::user()->metaData) {
        return redirect()->route('user.dashboard')->withSuccess('You have Successfully loggedin');
      } else {
        return redirect()->route('user.personalInfo', [Auth::id()])->withSuccess('You have Successfully loggedin');
      }
    } else {
      return view('home-test', compact('mentors', 'users', 'calls', 'reviews', 'review1', 'review2', 'review3', 'review4', 'review5'));
    }
    }
}