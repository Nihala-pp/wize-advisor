<?php

namespace App\Http\Controllers;

use App\Mail\RejectedCallMail;
use App\Mail\RejectedCallUserMail;
use App\Mail\updateSessionMail;
use App\Models\Article;
use App\Models\Blogs;
use App\Models\MentorAchievements;
use App\Models\MentorsFaq;
use App\Models\Review;
use App\Models\UserFaq;
use App\Notifications\NewCallRequest;
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
use Hash;
use Illuminate\Support\Facades\File;
use App\Rules\ReCaptcha;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use App\Notifications\CallRejectedUser;
use Redirect;

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
    $mentors = User::where('role_id', 2)->whereNull('status')->get();
    $users = User::where('role_id', 3)->get()->count();
    $calls = ScheduledCall::get()->count();
    $reviews = Review::where('id', 7)->first();
    $review1 = Review::where('id', 8)->first();
    $review2 = Review::where('id', 15)->first();
    $review3 = Review::where('id', 14)->first();
    $review4 = Review::where('id', 16)->first();
    $review5 = Review::where('id', 9)->first();

    if (Auth::id() && auth()->user()->role_id == 3) {
      if (Auth::user()->metaData) {
        return redirect()->route('user.dashboard')->withSuccess('You have Successfully loggedin');
      } else {
        return redirect()->route('user.personalInfo', [Auth::id()])->withSuccess('You have Successfully loggedin');
      }
    } else {
      return view('home', compact('mentors', 'users', 'calls', 'reviews', 'review1', 'review2', 'review3', 'review4', 'review5'));
    }
  }

  public function profile($id)
  {
    $data = User::find($id);
    $expertise = Expertise::where('mentor_id', $id)->get();
    $experience = MentorsExperience::where('user_id', $id)->take(2)->get();
    $last_experience = MentorsExperience::where('user_id', $id)->skip(2)->take(3)->get();
    $achievements = MentorAchievements::where('mentor_id', $id)->get();
    $reviews = Review::where('mentor_id', $id)->get();
    $articles = Article::where('mentor_id', $id)->get();
    // dd($achievements);

    return view('profile', compact('data', 'experience', 'expertise', 'last_experience', 'achievements', 'reviews', 'articles'));
  }

  public function browseMentor($name = NULL, $filter = NULL)
  {
    // dd($name);
    $variable = $name;
    if (!empty($variable)) {
      switch ($filter) {
        case 'name':
          $mentors = User::where('name', 'LIKE', '%' . $variable . '%')->whereNull('status')->get();
          break;
        case 'price':
          $mentors = User::where('role_id', 2)
            ->whereNull('status')
            ->whereHas('metaData', function (Builder $query) use ($variable) {
              $query->where('price_per_call', 'LIKE', '%' . $variable . '%');
            })->get();
          break;
        case 'expertise':
          $mentors = User::where('role_id', 2)
            ->whereNull('status')
            ->whereHas('metaData', function (Builder $query) use ($variable) {
              $query->where('expertise', 'LIKE', '%' . $variable . '%');
            })->get();
          break;
        case 'date':
          $schedule = AvailableSchedule::with('user')->where('date', 'LIKE', '%' . $variable . '%')->get();
          break;
        case 'time':
          $mentors = AvailableSchedule::where('price', 'LIKE', '%' . $variable . '%')->get();
          break;
        case 'sortBy':
          $mentors = User::where('role_id', 2)
            ->whereNull('status')
            ->whereHas('metaData', function (Builder $query) use ($variable) {
              $query->orderBy('price_per_call', $variable);
            })->get();
          break;
        default:
          $mentors = User::where('role_id', 2)->whereNull('status')->get();
      }
    } else {
      $mentors = User::where('role_id', 2)->whereNull('status')->get();
    }

    // dd($mentors);

    $price = User::where('role_id', 2)->whereNull('status')->get();
    $slot = AvailableSchedule::where('date', '>=', now())
      // ->disctint()
      ->get();

    // $expertise = UserMeta::select('expertise')
    // ->groupBy('expertise')
    // ->get();

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

    // dd($expertise);
    return view('browse-mentor', compact('mentors', 'slot', 'expertise', 'price', 'variable', 'expertise'));
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

    ?>
    <script type="text/javascript">
    a   lert("Be a Mentor Requested Successfully!");
    w   indow.location.href = "https://wiseadvizor.com/be-a-mentor";
    </script>
    <?php
  }

  public function scheduleCall(Request $request)
  {
    if (!empty($request->call_id)) {
      $call = ScheduledCall::find($request->call_id);
    } else {
      $call = '';
    }

    $mentor = User::find($request->id);
    $timezone = \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);
    $nextAvailability = AvailableSchedule::where('mentor_id', $request->id)
      ->whereDate('date', '>', now())
      ->where('is_booked', 0)
      ->orderBy('date', 'asc')
      ->first();

    // $user = User::find($email);

    // if ($user->role_id == 3 && $user->metaData) {
    return view('schedule-call', compact('mentor', 'timezone', 'nextAvailability', 'call'));
    // } 
  }

  public function addScheduleRequest(Request $request)
  {
    $requestData = $request->all();
    $data = array();
    parse_str($requestData['data'], $data);
    $id = json_encode($data['mentor']);

    Validator::make($data, [
      'desc' => 'required',
      'time' => 'required',
      'timezone' => 'required',
    ])->validate();

    if ($request->hasFile('doc')) {
      $completeFileName = $request->file('doc')->getClientOriginalName();
      $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
      $extension = $request->file('doc')->getClientOriginalExtension();
      $compPic = str_replace(' ', '_', $fileNameOnly) . '-' . rand() . '_' . time() . '.' . $extension;
      $path = $request->file('doc')->storeAs('public/assets/img/docs', $compPic);
      $request->doc = 'docs/' . $compPic;
    } else {
      $request->doc = '';
    }

    $month = $data['month'];
    $nmonth = date("m", strtotime($data['month']));
    $date = $data['year'] . '-' . $nmonth . '-' . $data['day'];
    $start_time = Carbon::parse($data['time'])->format('H:i');
    $end_time = Carbon::parse($data['time'])->addMinutes($data['duration']);
    $finish_time = $end_time->toTimeString();

    $mentor_timezone = AvailableSchedule::where('mentor_id', $data['mentor'])->where('date', Carbon::parse($date)->format('Y-m-d'))->first();
    // dd($date);

    $user_timezone = new \DateTime($date . ' ' . $data['time'], new \DateTimeZone($data['timezone']));

    $user_timezone->setTimezone(new \DateTimeZone($mentor_timezone->time_zone));

    $mentor_finish_time = Carbon::parse($user_timezone->format('H:i:s'))->addMinutes($data['duration']);

    $call = ScheduledCall::create([
      'user_id' => Auth::id(),
      'mentor_id' => $data['mentor'],
      'price' => $data['price'],
      'date' => $date,
      'duration' => $data['duration'],
      'start_time' => $data['time'],
      'end_time' => $finish_time,
      'utc' => $data['timezone'],
      'status' => 'Pending',
      'description' => $data['desc'],
      'documents' => $request->doc
    ]);

    AvailableSchedule::where('mentor_id', $data['mentor'])
      ->where('date', Carbon::parse($date)->format('Y-m-d'))
      ->where('start_time', $user_timezone->format('H:i:s'))
      ->first()
      ->update([
        'is_booked' => 1,
        'call_id' => $call['id']
      ]);

    $mentor = User::find($data['mentor']);
    $user = User::find(Auth::id());

    $details = [
      'mentor' => $data['mentor'],
      'mentor_name' => $mentor->name,
      'user_name' => $user->name,
      'user_id' => Auth::id(),
      'desc' => $data['desc'],
      'user' => $user->name,
      'date' => $date,
      'start_time' => $data['time'],
      'finish_time' => $finish_time,
      'UTC' => $data['timezone'],
      'duration' => $data['duration'],
      'mentor_timezone' => $mentor_timezone->time_zone,
      'mentor_start_time' => $user_timezone->format('h:i A'),
      'mentor_finish_time' => $mentor_finish_time->format('h:i A'),
      'call' => $data['call_id'] ? ScheduledCall::find($data['call_id']) : null
    ];

    Mail::to($mentor->email)->send(new ScheduleCallRequest($details));
    Mail::to($user->email)->send(new ScheduleCallRequestUser($details));

    $user = User::find(Auth::id());
    $mentor = User::find($data['mentor']);
    
    if (!empty($data['call_id'])) {
      ScheduledCall::find($data['call_id'])->update(['status' => 'Rejected']);

      $mentor->notify(new CallRejectedUser($user));

      Mail::to('info@wiseadvizor.com')->send(new updateSessionMail($details));
      Mail::to($mentor->email)->send(new RejectedCallMail($details));
      Mail::to($user->email)->send(new RejectedCallUserMail($details));
    }

    $mentor->notify(new NewCallRequest($user));

    // return redirect()->action(
    //   [HomeController::class, 'success'],
    //   ['details' => $details]
    // );

    // Redirect::to('success?details='. $details);

    return $this->success($details);

    // return view('success', compact('details', 'mentor'));
  }

  public function getTimeAvailability(Request $request)
  {
    $mentor = $request->mentor;
    $timezone = $request->timezone ? $request->timezone : Auth::user()->metaData->timezone;
    $nmonth = Carbon::parse($request->day . ' ' . $request->month)->month;

    $format = $request->year . '-' . $nmonth . '-' . $request->day;
    $date = Carbon::parse($format)->toDateString();
    $availability = AvailableSchedule::where('mentor_id', $mentor)->where('date', $date)->where('is_booked', 0)->get();
    $timeAvailability = $this->utcToChangeTimezone($availability, $timezone);

    return $timeAvailability;
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
    return response()->json($time);
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
    $request->validate([
      'firstname' => 'required',
      'lastname' => 'required',
      'email' => 'required|email',
      'mobilenumber' => 'required|digits:10|numeric',
      'message' => 'required',
      'g-recaptcha-response' => ['required', new ReCaptcha]
    ]);

    $email = 'info@wiseadvizor.com';

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
    $blogs = Blogs::get();

    return view('blogs', compact('blogs'));
  }

  public function blogDetailPage($id)
  {
    $blog = Blogs::find($id);

    return view('blog-detail', compact('blog'));
  }

  public function faq()
  {
    $userFaq = UserFaq::get();
    $mentors_faq = MentorsFaq::get();

    return view('faq', compact('userFaq', 'mentors_faq'));
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
    $month = $request->month;
    $year = $request->year;
    $mentor = $request->mentor;
    $date = AvailableSchedule::where('mentor_id', $mentor)->whereYear('date', '=', $year)
      ->whereMonth('date', '=', $month)->get();

    $dates = array();

    foreach ($date as $dt) {
      $dates[] = Carbon::parse($dt->date)->format('d');
    }

    return response()->json($dates);
  }

  public function test()
  {
    $tzlist = \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);
    // dd($tzlist);
    $password = Hash::make('soha@123!');
    dd($password);

    return view('call');
  }

  public function completedCalls()
  {

  }

  public function callFeedBack()
  {

  }

  public function callReminder()
  {

  }

  public function weeklySlotUpdate()
  {

  }
}