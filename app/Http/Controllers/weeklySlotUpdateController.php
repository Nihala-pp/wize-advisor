<?php

namespace App\Http\Controllers;

use App\Mail\weeklySlotUpdate;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Mail;
use Log;

class weeklySlotUpdateController extends Controller
{
    public function index()
    {
        try {
            $mentors = User::where('role_id', 2)->get();

            foreach ($mentors as $mentor) {
                Mail::to($mentor->email)->send(new weeklySlotUpdate($mentor));
                Log::info('weekly Slot Update Successfully completed');
            }
            return "Done!";
        } catch (Exception $e) {
            return "Something went wrong!";
        }
    }
}