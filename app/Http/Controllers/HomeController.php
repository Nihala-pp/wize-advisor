<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\AvailableSchedule;
use App\Models\ScheduledCall;
use App\Models\MentorJoinRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use App\Mail\ScheduleCallRequest;
use App\Mail\ScheduleCallRequestUser;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mentors = User::where('role_id', 2)->get();
        $users = User::where('role_id', 3)->get()->count();
        $calls = ScheduledCall::get()->count();

        return view('home', compact('mentors','users','calls'));
    }

    public function profile($id)
    {
        $data = User::find($id);

        return view('profile', compact('data'));
    }

    public function browseMentor($name = NULL, $filter = NULL)
    {
        // dd($name);
        $variable = $name;
        if(!empty($variable)) {
            switch($filter) {
                case 'name':
                    $mentors = User::where('name', 'LIKE', '%'.$variable.'%')->get();  
                  break;
                case 'price':
                    $mentors = User::where('role_id', 2)
                      ->whereHas('metaData', function (Builder $query) use ($variable) {
                        $query->where('price_per_call', 'LIKE', '%'.$variable.'%');
                       })->get();
                  break;
                  case 'expertise':
                    $mentors = User::where('role_id', 2)
                      ->whereHas('metaData', function (Builder $query) use ($variable) {
                        $query->where('expertise', 'LIKE', '%'.$variable.'%');
                       })->get();
                  break;
                  case 'date':
                    $schedule = AvailableSchedule::with('user')->where('date', 'LIKE', '%'.$variable.'%')->get();  
                  break;
                  case 'time':
                    $mentors = AvailableSchedule::where('price', 'LIKE', '%'.$variable.'%')->get();  
                  break;
                  case 'sortBy':
                    $mentors = User::where('role_id', 2)->orderBy('name', $variable)->get();  
                  break;
                default:
                   $mentors = User::where('role_id', 2)->get();
              }
        }
        else {
            $mentors = User::where('role_id', 2)->get();
        }

        // dd($mentors);

        $price = User::where('role_id', 2)->get();
        $slot = AvailableSchedule::where('date', '>=', now())
        // ->disctint()
        ->get();

        $expertise = UserMeta::select('expertise')
        ->groupBy('expertise')
        ->get();
        // dd($expertise);
        return view('browse-mentor', compact('mentors','slot','expertise', 'price', 'variable'));
    }

    public function addMentor()
    {
        return view('be-a-mentor');   
    }

    public function addMentorRequest(Request $request)
    {
        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'designation' => $request->designation,
            'qualification' => $request->qualification,
            'email' => $request->email,
            'linkedin_profile' => $request->linked_in,
            'is_experienced' => $request->experience,
            'number_of_session_per_week' => $request->weekly_session,
            'is_charged' => $request->is_charged,
            'price_per_call' => $request->price_per_session,
            'expertise' => json_encode($request->expertise)
        ];

        MentorJoinRequest::create($data);
        echo("Request Submitted Succcessfully");
    }

    public function scheduleCall($id)
    {
        $mentor = User::find($id);
        $timezone = AvailableSchedule::timezones();

        return view('schedule-call', compact('mentor','timezone'));
    }

    public function addScheduleRequest(Request $request)
    {
      $requestData = $request->all();
      $data = array();
      parse_str($requestData['data'], $data);
      //  dd($data['duration']);

       $month =  $data['month'];
       $nmonth = date("m", strtotime($data['month']));
       $date = $data['year'].'-'.$nmonth.'-'.$data['day'];
       $start_time = Carbon::parse($data['time'])->format('H:i');
       $end_time =  Carbon::parse($data['time'])->addMinutes($data['duration']);
       $finish_time = $end_time->toTimeString();
      
       ScheduledCall::create([
        'user_id' => 2,
        'mentor_id' => $data['mentor'],
        'price' => $data['price'],
        'date' => $date,
        'duration' => $data['duration'],
        'start_time' => $data['time'],
        'end_time' => $finish_time,
        'utc' => $data['timezone'],
        'status' => 'Pending',
        'description' =>  $data['desc'],
        'documents' => ''
       ]);

       $mentor = User::find($data['mentor']);
       $user = User::find(4);


       $details = [
        'mentor' => $data['mentor'],
        'mentor_name' => $mentor->name,
        'user_id' => 4,
        'user' => $user->name,
        'date' => $date,
        'start_time' => $data['time'],
        'finish_time' => $finish_time,
        'UTC' => $data['timezone'],
        'duration' => $data['duration'],
       ];



    //    return redirect()->action(
    //     [HomeController::class, 'success'], [$data]
    // );
      //  return $this->success($data);
      $this->sendScheduleRequestMail($details);
      $this->sendScheduleRequestUserMail($details);

      return view('success', compact('details', 'mentor'));
       
    }

    public function getTimeAvailability(Request $request)
    {
        $mentor = $request->mentor;
        $nmonth = date("m", strtotime($request->month));
        $date = $request->day.'-'.$nmonth.'-'.$request->year;
        $availability = AvailableSchedule::where('mentor_id', $mentor)->where('date', $date)->where('time_zone', $request->timezone)->get()->toArray();
        // dd($availability);
        return response()->json($availability);
    }

    public function success($details)
    {

       $mentor = User::find($details['mentor']);
        
       return view('success', compact('details', 'mentor'));
    }

    public function sendScheduleRequestMail($details)
    {
       $mentor = User::find($details['mentor']);

       Mail::to($mentor->email)->send(new ScheduleCallRequest($details));

      //  dd("Email is sent successfully.");
    }

    public function sendScheduleRequestUserMail($details)
    {
      $mentor = User::find($details['user_id']);

       Mail::to($mentor->email)->send(new ScheduleCallRequestUser($details));

      //  dd("Email is sent successfully.");
    }

    public function termsConditions()
    {
        return view('terms-conditions');
    }

    public function privacyPolicy()
    {
         return view('privacy-policy');
    }
}