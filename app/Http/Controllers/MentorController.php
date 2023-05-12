<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index()
    {
        return view('mentors.index');
    }

    public function my_sessions()
    {
        return view('mentors.sessions');
    }

    public function profile()
    {
        return view('mentors.profile');
    }

    public function reviews()
    {
        return view('mentors.reviews');
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
}
