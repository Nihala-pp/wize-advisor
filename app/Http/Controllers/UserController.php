<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Notifications\NewReview;
use App\Notifications\passwordChange;
use App\Notifications\profileUpdate;
use App\Notifications\ReviewAdmin;
use App\Notifications\SloteUpdate;
use Illuminate\Support\Facades\Auth;
use App\Models\ScheduledCall;
use App\Models\AvailableSchedule;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\Review;
use App\Models\Expertise;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Mail\ScheduleCallRequest;
use App\Mail\ScheduleCallRequestUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use App\Models\ExpertiseList;
use Hash;
use Illuminate\Support\Str;


class UserController extends Controller
{
  public function index()
  {
    // $total_calls_scheduled = ScheduledCall::where('mentor_id', Auth::id())->get()->count();
    // $total_calls_approved = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Approved')->get()->count();
    // $total_calls_rejected = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Rejected')->get()->count();
    // $total_earning= ScheduledCall::where('mentor_id', Auth::id())->sum('price');

    $upcoming_sessions =  ScheduledCall::where('user_id', Auth::id())->where('status', 'Approved')->where('is_paid', 1)->where('date', '>=', Carbon::now())->get();
    $completed_sessions = ScheduledCall::where('user_id', Auth::id())->where('status', 'Approved')->where('is_paid', 1)->where('date', '<', Carbon::now())->get();
    $requested_sessions = ScheduledCall::where('user_id', Auth::id())->where('status', 'Pending')->where('is_paid', 1)->get();
    // $expertise = auth()->user()->metaData ? json_decode(auth()->user()->metaData->expertise) : '';
    // dd($expertise);
    $notifications = auth()->user()->unreadNotifications;
      
    // foreach($expertise as $expert) {
    //   $suggested_mentors = User::with(['expertise', 'availability'])
    //   ->where('role_id', 2)
    //   ->WhereNull('status')
    //   ->whereHas('expertise', function ($query) use ($expert) {
    //     /** @var Builder $query */
    //     if ($expert)
    //       $query->where('expertise', 'LIKE', '%' . $expert . '%');
    //   })
    //   ->get();
    // }
        
    if (auth()->user()->role_id == 3 && auth()->user()->metaData) {
      return view('users.index', compact('upcoming_sessions', 'completed_sessions', 'requested_sessions', 'notifications'));
    } else {
      return redirect()->route('user.personalInfo', [Auth::id()])->withSuccess('You have Successfully loggedin');
    }
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
    $admin = User::find(1);
    $mentor = User::find($request->mentor);

    $message = "{$user->name} added New Review for you";
    // $messages["mentor"] = $request->mentor;
    // $messages["user"] = Auth::id();

    // $user->notify(new BirthdayWish($messages));

    $mentor->notify(new NewReview($mentor));
    $admin->notify(new ReviewAdmin($mentor));

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
    $mentor = User::find($request->mentor);
    $user = User::find(Auth::id());
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
      'documents' => $request->documents,
      'is_paid' => 1
    ]);

    $user->notify(new SloteUpdate($mentor));

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
    $expertise = ExpertiseList::where('is_active', 0)->get();


    $timezone = AvailableSchedule::timezones();
    $id = Auth::id();
    $data = User::find($id);
    $total_learning = ScheduledCall::where('user_id', $id)->where('status', 'Approved')->where('is_paid', 1)->get()->count() * 30;
    $completed_sessions = ScheduledCall::where('user_id', $id)->where('status', 'Approved')->where('is_paid', 1)->get()->count();
    $scheduled_calls = ScheduledCall::where('mentor_id', $id)->where('status', 'Approved')->where('is_paid', 1)->where('date', '>=', Carbon::now())->get();

    return view('users.profile', compact('data', 'scheduled_calls', 'expertise', 'timezone', 'total_learning', 'completed_sessions'));
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
    // dd($request->all());
    $user = User::find($request->row_id);

    if(!empty($request->profile_pic)) {

      $pro_pic = time() . '.' . $request->profile_pic->getClientOriginalExtension();
      $request->profile_pic->move(public_path('assets/img'), $pro_pic);
     } else {
      $pro_pic = $user->metaData->profile_pic;
    }

    //   $credentials = $request->validate([
    //     'password' => [
    //         'required',
    //         'confirmed', Password::min(8)4
    //             ->letters()
    //             ->mixedCase()
    //             ->numbers()
    //             ->symbols()
    //     ],
    // ]);

    $password = $request->password ? Hash::make($request->password) : $user->password;

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

    $user->notify(new profileUpdate($user));

    ?>
<script type="text/javascript">
alert("Profile Updated Successfully!");
</script>
<?php

    // $notification = array(
    //   'message' => 'Profile Updated Successfully!',
    //   'alert-type' => 'success'
    // );

    return redirect()->route('user.profile', [$request->row_id]) ->with('Profile Updated Successfully!');
  }

  public function changePassword()
  {
    return view('users.change-password');
  }

  public function savePassword(Request $request)
  {
    $user = User::find(Auth::id());
    //  $request->validate([
    //   'password' => [
    //       'required',
    //       'confirmed',
    //       Password::min(8)
    //           ->letters()
    //           ->mixedCase()
    //   ]
    // ]);

    if($request->password != $request->password_confirmation)
    {
        // dd($request->password_confirmation);

         ?>
<script type="text/javascript">
alert("Password Doesn't Match!");
window.location.href = "https://wiseadvizor.com/user/change-password";
</script>
<?php
    }
    else {
      $data = [
        'password' => Hash::make($request->password),
      ];
  
      User::updateOrCreate(
        ['id' => Auth::id()],
        $data
      );
  
      $user->notify(new passwordChange($user));
  
      $notification = array(
        'message' => 'Password Updated Successfully!',
        'alert-type' => 'success'
      );
  
      ?>
<script type="text/javascript">
alert("Password Updated Successfully!");
</script>
<?php
    }

    return redirect()->route('user.change-password')->with($notification, 'Password Updated Successfully!');
  }

  public function listReviews()
  {
    $reviews = Review::where('user_id', Auth::id())->get();

    return view('users.my-reviews', compact('reviews'));
  }

  Public function profileTest()
  {

    $data = User::find('970');
    $timezone = AvailableSchedule::timezones();
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

    return view('users.profile-test', compact('data', 'expertise', 'timezone'));
  }

  public function test()
  {

    $upcoming_sessions =  ScheduledCall::where('user_id', Auth::id())->where('status', 'Approved')->where('is_paid', 1)->where('date', '>=', Carbon::now())->get();
    $completed_sessions = ScheduledCall::where('user_id', Auth::id())->where('status', 'Approved')->where('is_paid', 1)->where('date', '<', Carbon::now())->get();
    $requested_sessions = ScheduledCall::where('user_id', Auth::id())->where('status', 'Pending')->where('is_paid', 1)->get();
    
    $notifications = auth()->user()->unreadNotifications;

    $expertise = auth()->user()->metaData ? json_decode(auth()->user()->metaData->expertise) : '';

    if(!empty($expertise)) {
      foreach($expertise as $expert) {
       $suggested_mentors = User::with(['expertise'])
       ->where('role_id', 2)
       ->WhereNull('status')
       ->whereHas('expertise', function ($query) use ($expert) {
        /** @var Builder $query */
        if ($expert)
          $query->where('expertise', 'LIKE', '%' . $expert . '%');
       })
       ->take(3)->get();
     }
    }
    else {
      $suggested_mentors = User::where('role_id', 2)
      ->WhereNull('status')
      ->take(3)->get();
    }

    $referral_link = "https://wiseadvizor.com/registration/".auth()->user()->id."/"."Mentor35"."/"."Startup-mentorship-platform";
    
    if (auth()->user()->role_id == 3 && auth()->user()->metaData) {
       return view('users.dashboard-test', compact('upcoming_sessions', 'completed_sessions', 'requested_sessions', 'notifications', 'suggested_mentors', 'referral_link'));
    } 
  }

  public function searchExpertise(Request $request)
  {

      $expertise = $request->expertise;

      return redirect()->route('browseMentor', [$expertise]);  
  }
}