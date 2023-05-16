<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function user_profiles()
    {
        return view('admin.user_list');
    }

    public function view_profile()
    {
        return view('admin.view_profile');
    }

    public function list_mentors()
    {
        return view('admin.mentors');
    }

    public function mentors_profile()
    {
        return view('admin.mentors_profile');
    }

    public function reviews()
    {
        return view('admin.reviews');
    }

    public function experience()
    {
        return view('admin.experience');
    }

    public function expertise()
    {
        return view('admin.expertise');
    }

    public function scheduledCalls()
    {
        return view('admin.scheduled-calls');
    }

    public function signin()
    {
        return view('admin.sign-in');
    }

    public function signup()
    {
        return view('admin.sign-up');
    }
}
