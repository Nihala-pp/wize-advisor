<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\AvailableSchedule;
use App\Models\Contact;
use App\Models\ScheduledCall;
use App\Models\MentorJoinRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use App\Mail\ScheduleCallRequest;
use App\Mail\ScheduleCallRequestUser;
use App\Mail\ContactMail;
use App\Models\Expertise;
use App\Models\MentorsExperience;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

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
        $expertise = Expertise::where('mentor_id', $id)->get();
        $experience = MentorsExperience::where('user_id', $id)->take(2)->get();
        $last_experience = MentorsExperience::where('user_id', $id)->skip(2)->take(10)->get();

        return view('profile', compact('data','experience','expertise','last_experience'));
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

        // $expertise = UserMeta::select('expertise')
        // ->groupBy('expertise')
        // ->get();

        $expertise = [
          '1'  =>	 'Sales',
          '2'  =>	 'Marketing',
          '3'  =>	 'Technology',
          '4'  =>	 'Idea Validation',
          '5'  =>	 'Product Market Fit',
          '6'  =>	 'Team Management',
          '7'  =>	 'Content creation',
          '8'  =>	 'Leadership',
          '9'  =>	 'Fund raising',
          '10' =>  'Networking',
          '11' =>  'Social Media',
          '12' =>  'Pricing Strategy',
          '13' =>  'Startup valuation',
          '14' =>  'Business Strategy',
          '15' =>  'Email Marketing',
          '16' =>  'Brand Building ',
          '17' =>	 'SEO',
          '18' =>	 'Operations and logistics',
          '19' =>	 'Risk Management',
          '20' =>	 'Ads Strategy',
          '21' =>	 'Go to Market Strategy',
          '22' =>	 'Growth Strategy'          
      ];

        // dd($expertise);
        return view('browse-mentor', compact('mentors','slot','expertise', 'price', 'variable', 'expertise'));
    }

    public function addMentor()
    {
        return view('be-a-mentor');   
    }

    public function contactUs()
    {
        return view('contact-us');   
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
        //  dd(Auth::user()->id);
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

      if(empty($data['time']))
      {
          ?>
<script type="text/javascript">
var custom_location = '{{ url("https://wiseadvizor.com/schedule-call" }}';
Id = "{{ $data['mentor'] }}";
alert("Please choose the time slot");
window.location.href = "' + custom_location + " / " + Id + '";
</script>
<?php          
      } 

      if(empty($data['timezone']))
      {
          ?>
<script type="text/javascript">
var custom_location = '{{ url("https://wiseadvizor.com/schedule-call" }}';
Id = "{{ $data['mentor'] }}";
alert("Please choose the time slot");
window.location.href = "' + custom_location + " / " + Id + '";
</script>
<?php          
      } 
      else {
       $month =  $data['month'];
       $nmonth = date("m", strtotime($data['month']));
       $date = $data['year'].'-'.$nmonth.'-'.$data['day'];
       $start_time = Carbon::parse($data['time'])->format('H:i');
       $end_time =  Carbon::parse($data['time'])->addMinutes($data['duration']);
       $finish_time = $end_time->toTimeString();
      
       ScheduledCall::create([
        'user_id' => Auth::id(),
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
       $user = User::find(Auth::id());

       $details = [
        'mentor' => $data['mentor'],
        'mentor_name' => $mentor->name,
        'user_id' => Auth::id(),
        'user' => $user->name,
        'date' => $date,
        'start_time' => $data['time'],
        'finish_time' => $finish_time,
        'UTC' => $data['timezone'],
        'duration' => $data['duration'],
       ];

       return view('success', compact('details', 'mentor'));
  
      }
    }

    public function getTimeAvailability(Request $request)
    {
        $mentor = $request->mentor;
        $timezone = $request->timezone ? $request->timezone : Auth::user()->metaData->timezone;
        $nmonth = Carbon::parse($request->day.' '.$request->month)->month;

        $format = $request->year.'-'.$nmonth.'-'.$request->day;
        $date = Carbon::parse($format)->toDateString();
        $availability = AvailableSchedule::where('mentor_id', $mentor)->where('date', $date)->get();
        $timeAvailability = $this->utcToChangeTimezone($availability, $timezone);

        return response()->json($timeAvailability);
    }

    public function utcToChangeTimezone($availability, $timezone)
    {
      foreach($availability as $avail)
      {
         $date = new \DateTime($avail->date.' '.$avail->start_time, new \DateTimeZone('US/Pacific'));
        //  echo($date->format('Y-m-d H:i:sP'));
        //  echo $date->format('Y-m-d H:i:sP') . "\n";
            
         $date->setTimezone(new \DateTimeZone('Asia/Kolkata'));
         $time[] = $date->format('H:i:s');
      }

      return $time;
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

    public function saveContact(Request $request)
    {
        $email = 'ankur.sharma@wiseadvizor.com';

        $details = Contact::create([
         'firstname' => $request->firstname,
         'lastname' => $request->lastname,
         'mob' => $request->mobilenumber,
         'email' => $request->email,
         'message' => $request->message,
        ]);

        Mail::to($email)->send(new ContactMail($details));

        return view('thankyou');
    }

    public function resources()
    {
       return view('resources');
    }

    public function blogs()
    {
       return view('blogs');
    }

    public function faq()
    {
       return view('faq');
    }

    public function communityGuidelines()
    {
       return view('community-guidelines');
    }

    public function libararies()
    {
       return view('libraries');
    }

    public function communityPosts()
    {
       return view('community-post');
    }

    public function aboutUs()
    {
       return view('about-us');
    }

    public function getDateAvailability(Request $request)
    {
       $timezone = $request->timezone;
       $today = Carbon::now()->format('Y-m-d');
       $date = AvailableSchedule::where('mentor_id', $request->mentor)->where('date', '>=', $today)->where('time_zone', $timezone)->get();
      //  dd($date);

       return response()->json($date);
    }
}