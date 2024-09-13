<?php

namespace App\Http\Controllers;

use App\Mail\ToDoMail;
use App\Models\TodoList;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Exception;
use Log;

class ToDOController extends Controller
{
    public function index()
    {
        try {
            $to_do_task = TodoList::where('is_done', '0')
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', date('m'))
            ->whereDay('created_at', date('d'))
            ->get();

            foreach ($to_do_task as $to_do) {

                $user_timezone = new \DateTime($to_do->created_at, new \DateTimeZone('Asia/Tbilisi'));

                $user_finish_time = Carbon::parse($user_timezone->format('H:i'))->subHour()->format('Y-m-d H:i');

                $current_time = Carbon::now()->timezone('Asia/Tbilisi')->format('Y-m-d H:i');

                if ($user_finish_time == $current_time) {

                    $details = [
                        'task' => $to_do->task,
                        'created_at' => $to_do->created_at,
                    ];

                    Mail::to('info@wiseadvizor.com')->send(new ToDoMail($details));
                    Log::info('mail after call completion Successfully send');
                }
            }
            return "Done!";
        } catch (Exception $e) {
            return "Something went wrong!";
        }
    }
}