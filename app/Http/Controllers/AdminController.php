<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        //    $role = Roles
        $total_users = User::where('role_id', 3)->count();
        $total_amount = '';
        $total_earnings = '';
        $total_call_scheduled = '';
        $total_mentors = User::where('role_id', 2)->count();
        $notifications = auth()->user()->unreadNotifications;


        return view('index', compact('total_users', 'total_mentors', 'total_call_scheduled', 'total_earnings', 'total_amount', 'notifications'));
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

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
}
