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
       return view('home-test');
    }
}