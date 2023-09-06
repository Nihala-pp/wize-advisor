<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Notifications\NewReview;
use Illuminate\Support\Facades\Auth;
use App\Models\ScheduledCall;
use App\Models\AvailableSchedule;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\Review;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Mail\ScheduleCallRequest;
use App\Mail\ScheduleCallRequestUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Hash;

class UserController extends Controller
{
  public function index()
  {
    // $total_calls_scheduled = ScheduledCall::where('mentor_id', Auth::id())->get()->count();
    // $total_calls_approved = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Approved')->get()->count();
    // $total_calls_rejected = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Rejected')->get()->count();
    // $total_earning= ScheduledCall::where('mentor_id', Auth::id())->sum('price');

    $upcoming_sessions = ScheduledCall::where('user_id', Auth::id())->where('status', 'Approved')->where('date', '>=', Carbon::now())->get();
    $completed_sessions = ScheduledCall::where('user_id', Auth::id())->where('status', 'Approved')->where('date', '<', Carbon::now())->get();
    $requested_sessions = ScheduledCall::where('user_id', Auth::id())->where('status', 'Pending')->get();
    $expertise = auth()->user()->metaData ? auth()->user()->metaData->expertise : '';
    $suggested_mentors = User::where('role_id', 2)
      ->whereHas('metaData', function ($q) use ($expertise) {
        $q->where('expertise', 'LIKE', '%' . $expertise . '%');
      })->get();

    return view('users.index', compact('upcoming_sessions', 'completed_sessions', 'requested_sessions', 'suggested_mentors'));
  }

  public function review($id)
  {

    return view('users.review', compact('id'));
  }

  public function saveReview(Request $request)
  {
    Review::create([
      'user_id' => Auth::id(),
      'mentor_id' => $request->mentor,
      'review' => $request->comment,
      'rating' => $request->rating,
    ]);

    $user = User::find(Auth::id());
    $mentor = User::find($request->mentor);

    $message = "{$user->name} added New Review for you";
    // $messages["mentor"] = $request->mentor;
    // $messages["user"] = Auth::id();

    // $user->notify(new BirthdayWish($messages));

    $mentor->notify(new NewReview($mentor));

    ?>
<script type="text/javascript">
alert("Review has been submitted");
window.location.href = "https://wiseadvizor.com/user/dashboard";
</script>
<?php
  }

  public function updateSchedule($id)
  {
    $scheduled_call = ScheduledCall::find($id);
    $utc = AvailableSchedule::timezones();
    $times = AvailableSchedule::where('mentor_id', $scheduled_call->mentor_id)->where('date', $scheduled_call->date)->get();
    $timeAvailability = $this->utcToChangeTimezone($times, $scheduled_call->utc);
    $dateAvailability = $this->getDateAvailability($scheduled_call);
    // dd($dateAvailability);

    return view('users.update-schedule', compact('scheduled_call', 'utc', 'times', 'timeAvailability', 'dateAvailability'));
  }

  public function utcToChangeTimezone($availability, $timezone)
  {
    $time = array();
    foreach ($availability as $avail) {
      $date = new \DateTime($avail->date . ' ' . $avail->start_time, new \DateTimeZone($avail->time_zone));
      //  echo($date->format('Y-m-d H:i:sP'));
      //  echo $date->format('Y-m-d H:i:sP') . "\n";
      $date->setTimezone(new \DateTimeZone($timezone));
      // $scheduled_slot = ScheduledCall::where('mentor_id', $avail->mentor_id)->where('date', $avail->date)->where('');
      $time[] = $date->format('H:i:s');
    }
    return $time;
  }

  public function saveSchedule(Request $request)
  {
    $scheduled_call = ScheduledCall::find($request->row_id);
    $end_time = Carbon::parse($request->start_time)->addMinutes($scheduled_call->duration);
    $finish_time = $end_time->toTimeString();

    $details = ScheduledCall::find($request->row_id)->update([
      'user_id' => Auth::id(),
      'mentor_id' => $request->mentor,
      'price' => $scheduled_call->price,
      'date' => $request->date,
      'duration' => $scheduled_call->duration,
      'start_time' => $request->start_time,
      'end_time' => $finish_time,
      'utc' => $request->utc,
      'status' => 'Pending',
      'description' => $request->description,
      'documents' => $request->documents
    ]);

    $this->sendScheduleRequestMail($details);
    $this->sendScheduleRequestUserMail($details);
  }

  public function sendScheduleRequestMail($details)
  {
    $mentor = User::find($details['mentor_id']);

    Mail::to($mentor->email)->send(new ScheduleCallRequest($details));

    //  dd("Email is sent successfully.");
  }

  public function sendScheduleRequestUserMail($details)
  {
    $mentor = User::find($details['mentor_id']);

    Mail::to($mentor->email)->send(new ScheduleCallRequestUser($details));

    //  dd("Email is sent successfully.");
  }

  public function profile($id)
  {
    $expertise = [
      '1' => 'Sales',
      '2' => 'Marketing',
      '3' => 'Technology',
      '4' => 'Idea Validation',
      '5' => 'Product Market Fit',
      '6' => 'Team Management',
      '7' => 'Content creation',
      '8' => 'Leadership',
      '9' => 'Fund raising',
      '10' => 'Networking',
      '11' => 'Social Media',
      '12' => 'Pricing Strategy',
      '13' => 'Startup valuation',
      '14' => 'Business Strategy',
      '15' => 'Email Marketing',
      '16' => 'Brand Building ',
      '17' => 'SEO',
      '18' => 'Operations and logistics',
      '19' => 'Risk Management',
      '20' => 'Ads Strategy',
      '21' => 'Go to Market Strategy',
      '22' => 'Growth Strategy'
    ];

    $timezone = AvailableSchedule::timezones();
    $id = Auth::id();
    $data = User::find($id);
    $scheduled_calls = ScheduledCall::where('mentor_id', $id)->where('status', 'Approved')->where('date', '>=', Carbon::now())->get();

    return view('users.profile', compact('data', 'scheduled_calls','expertise','timezone'));
  }

  public function getDateAvailability($scheduled_call)
  {
    $timezone = $scheduled_call->time_zone;
    $date = Carbon::parse($scheduled_call->date);
    $month = $date->format('m');
    $year = $date->format('Y');
    $mentor = $scheduled_call->mentor_id;
    $date = AvailableSchedule::where('mentor_id', $mentor)->whereYear('date', '=', $year)
      ->whereMonth('date', '=', $month)->groupBy('date')->pluck('date');

    // $dates = array();

    // foreach ($date as $dt) {
    //   $dates[] = Carbon::parse($dt->date)->format('d');
    // }

    return $date;
  }


  public function getTimeAvailability(Request $request)
  {
    $mentor = $request->mentor;
    $timezone = $request->timezone ? $request->timezone : Auth::user()->metaData->timezone;
    $date = Carbon::parse($request->date)->format('Y-m-d');
    $availability = AvailableSchedule::where('mentor_id', $mentor)->where('date', $date)->where('is_booked', 0)->get();
    $timeAvailability = $this->utcToChangeTimezone($availability, $timezone);

    return response()->json($timeAvailability);
  }

  public function save_users(Request $request)
  {
    dd($request->all());
    $user = User::find($request->row_id);

    if(empty($user->metaData->profile_pic)) {
      $pro_pic = time() . '.' . $request->profile_pic->getClientOriginalExtension();
      $request->profile_pic->move(public_path('public/assets/img'), $pro_pic);
    }
    else {
      $pro_pic = $request->profile;
    }
    

  //   $credentials = $request->validate([
  //     'password' => [
  //         'required',
  //         'confirmed', Password::min(8)
  //             ->letters()
  //             ->mixedCase()
  //             ->numbers()
  //             ->symbols()
  //     ],
  // ]);

    $password = $request->password ? Hash::make($request->password) :  $user->password;
    // dd($request->all());
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password,
        'role_id' => 3,
    ];

    $user_record = User::updateOrCreate(
        ['id' => $request->row_id],
        $data
    );

    $meta_data = [
        'user_id' => $user_record['id'],
        'company' => $request->company_name,
        'designation' => $request->designation,
        'social_linked_in' => $request->linked_in,
        'expertise' => json_encode($request->expert),
        'profile_pic' => $pro_pic,
        'timezone' => $request->timezone
    ];

    UserMeta::update_user_details($request->row_id, $meta_data);

    $notification = array(
        'message' => 'Profile Updated Successfully!',
        'alert-type' => 'success'
    );

    return redirect()->route('user.profile')
        ->with($notification, 'Profile Updated Successfully!');
  }
}