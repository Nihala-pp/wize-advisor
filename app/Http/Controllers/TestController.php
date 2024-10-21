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

    public function homeTest($token = Null, $id = Null, $name = Null)
    {
        
        $mentor = null;

        if($id) {
            $mentor = User::find($id)->name;
        }

        return view('login-test', compact('token', 'id', 'name', 'mentor'));
    }
}