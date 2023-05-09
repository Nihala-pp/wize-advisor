<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.user_list');
    }

    public function view_profile()
    {
        return view('admin.view_profile');
    }
    //
}