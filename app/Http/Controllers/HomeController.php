<?php

namespace App\Http\Controllers;

use App\Mail\RejectedCallMail;
use App\Mail\RejectedCallUserMail;
use App\Mail\updateSessionMail;
use App\Models\Article;
use App\Models\Blogs;
use App\Models\ExpertiseList;
use App\Models\MentorAchievements;
use App\Models\MentorsFaq;
use App\Models\Review;
use App\Models\UserFaq;
use App\Notifications\CallRejectedAdmin;
use App\Notifications\NewCallRequest;
use App\Notifications\NewCallRequestAdmin;
use App\Notifications\UpdateSessionAdmin;
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
use Exception;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

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

    //   Sumedha => GTM-Strategy, Brand-Strategy,
    //   Soha => Growth-Strategy, Storytelling,
    //   Michelle => Fundraising, Business-Strategy,
    //   Cien => Growth-Marketing, Idea-Validation,
    //   Nevra => GTM-Strategy, Marketing-Strategy,
    //   Lucile => E-Commerce, B2B,
    //   Svetlana => MVP-Strategy, Idea-Validation
    // ];

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
    $nextAvailability = AvailableSchedule::where('mentor_id', $data->id)
      ->whereDate('date', '>', now())
      ->where('is_booked', 0)
      ->orderBy('date', 'asc')
      ->first();

    $totalReviews = Review::where('mentor_id', $data->id)->get()->count();
    $totalSessions = ScheduledCall::where('mentor_id', $data->id)->where('status', 'Approved')->get()->count();
    // $expertise = [


    // dd($achievements);

    return view('profile', compact('data', 'experience', 'expertise', 'last_experience', 'achievements', 'reviews', 'articles', 'nextAvailability', 'totalReviews', 'totalSessions'));
  }

  public function browseMentor(Request $request)
  {
    $filters = $request['filters'];
    // dd($filters['expertise']);
    // dd($request->all());
    // dd($name);
    // $variable = $name;
    // if (!empty($variable)) {
    //   switch ($filter) {
    //     case 'name':
    //       $mentors = User::where('role_id', 2)->where('name', 'LIKE', '%' . $variable . '%')->whereNull('status')->get();
    //       break;
    //     case 'price':
    //       $mentors = User::where('role_id', 2)
    //         ->whereNull('status')
    //         ->whereHas('metaData', function (Builder $query) use ($variable) {
    //           $query->where('price_per_call', 'LIKE', '%' . $variable . '%');
    //         })->get();
    //       break;
    //     case 'expertise':
    //       $mentors = User::where('role_id', 2)
    //       ->whereNull('status')
    //       ->whereHas('expertise', function (Builder $query) use ($variable) {
    //         $query->where('expertise', 'LIKE', '%' . $variable . '%');
    //       })->get();

    //       // Expertise::with('user')->where('expertise', 'LIKE', '%' . $variable . '%')->get();
    //       break;
    //     case 'date':
    //       $mentors = User::where('role_id', 2)
    //         ->whereNull('status')
    //         ->whereHas('availability', function (Builder $query) use ($variable) {
    //           $query->whereDate('date', '=', $variable);
    //         })->get();
    //       break;
    //     case 'time':
    //       $mentors = AvailableSchedule::with('user')->where('price', 'LIKE', '%' . $variable . '%')->get();
    //       break;
    //     case 'sortBy':
    //       $mentors = User::where('role_id', 2)->where('status', '!=', 1)
    //       ->with(['metaData' => function ($q) use ($variable) {
    //         $q->orderBy('price_per_call', $variable);
    //         }])
    //         ->get();

    //       // User::where('role_id', 2)
    //       //   ->whereNull('status')
    //       //   ->whereHas('metaData', function (Builder $query) use ($variable) {
    //       //     $query->orderBy('price_per_call', $variable);
    //       //   })->get();
    //       break;
    //     default:
    //       $mentors = User::where('role_id', 2)->whereNull('status')->get();
    //   }
    // } else {
    // dd($mentors);

    if (!empty($filters)) {
      $mentors = User::where('role_id', 2)
        ->whereNull('status')
        ->with(['metaData' => function($query) use ($filters) {
          $query->orderBy('price_per_call', $filters['sort_by']);
        }])->has('metaData')
        // ->whereHas('metaData', function ($query) use ($filters) {
        //   /** @var Builder $query */
        //   if ($filters['sort_by'] == 'DESC')
        //     $query->where('price_per_call','!=', 0)->orderBy('price_per_call', 'desc');
        // })
        ->whereHas('expertise', function ($query) use ($filters) {
          /** @var Builder $query */
          if ($filters['expertise'])
            $query->where('expertise', 'LIKE', '%' . $filters['expertise'] . '%');
        })
        ->whereHas('availability', function ($query) use ($filters) {
          /** @var Builder $query */
          if ($filters['date'])
            $query->whereDate('date', '=', $filters['date']);
        })
        ->when((!empty($filters)), function ($query) use ($filters) {
          /** @var Builder $query */
          if ($filters['name'])
            $query->where('name', $filters['name']);
        })
        ->get()
        ->sortByDesc('account.restaurant_name');

      // ->sortByDesc('metaData.price_per_call');
    } else {
      $mentors = User::where('role_id', 2)->whereNull('status')->get();
    }

    $price = User::where('role_id', 2)->whereNull('status')->get();
    $slot = AvailableSchedule::where('date', '>=', now())->get();
    $expertise = ExpertiseList::get();

    if (!empty($filters)) {
      return view('browsers', compact('mentors', 'slot', 'price', 'expertise', 'filters'));
    } else {
      return view('browse-mentor', compact('mentors', 'slot', 'expertise', 'price'));
    }
  }

  public function filters(Request $request)
  {

    $filters = $request['filters'];

    dd($filters);

    $data['audits'] = AuditDetails::with(['user', 'status', 'shop'])
      ->whereHas('shop', function ($query) use ($filters) {
        /** @var Builder $query */
        if ($filters->get('sales_area'))
          $query->where('sales_area', $filters->get('sales_area'));
        if ($filters->get('sales_executive'))
          $query->where('sales_executive', $filters->get('sales_executive'));
      })
      ->whereHas('user', function ($query) use ($filters) {
        /** @var Builder $query */
        if ($filters->get('auditor'))
          $query->where('id', $filters->get('auditor'));
      })
      ->when($filters->count(), function ($query) use ($filters) {
        /** @var Builder $query */
        if ($filters->get('review_status'))
          $query->where('review_status', $filters->get('review_status'));
        if ($filters->get('action_required'))
          $query->where('action_required', $filters->get('action_required'));
        if ($filters->get('from'))
          $query->whereDate('created_at', '>=', $filters->get('from'));
        if ($filters->get('to'))
          $query->whereDate('created_at', '<=', $filters->get('to'));

      })->get();
  }

  public function addMentor()
  {
    if (!(Auth::id() && auth()->user()->role_id == 3)) {
      return view('be-a-mentor');
    }
  }

  public function contactUs()
  {
    return view('contact-us');
  }

  public function addMentorRequest(Request $request)
  {
    $request->validate([
      'email' => 'required|email|unique:mentors_join_request',
      'firstname' => 'required',
      'lastname' => 'required',
      'linked_in' => 'required',
      'qualification' => 'required'
    ]);

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
      alert("Be a Mentor Requested Successfull  y!");
      window.location.href = "https://wiseadvizor.com/be-a-mentor";
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

    $client_id = env('PAYPAL_LIVE_CLIENT');

    // $user = User::find($email);

    // if ($user->role_id == 3 && $user->metaData) {
    return view('schedule-call', compact('mentor', 'timezone', 'nextAvailability', 'call', 'client_id'));
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
      'documents' => $request->doc,
      'is_paid' => 0
    ]);

    $call_update_data = $data['call_id'] ? ScheduledCall::find($data['call_id']) : null;
    $call_data = ScheduledCall::find($call['id']);

    $client_id = env('PAYPAL_SANDBOX_CLIENT');

    // $gateway = new \Braintree\Gateway([
    //   'environment' => env("BRAINTREE_ENV"),
    //   'merchantId' => env("BRAINTREE_MERCHANT_ID"),
    //   'publicKey' => env("BRAINTREE_PUBLIC_KEY"),
    //   'privateKey' => env("BRAINTREE_PRIVATE_KEY")
    // ]);

    // $clientToken = $gateway->clientToken()->generate();

    return view('payment', compact('call_data', 'client_id'));

    // return redirect()->action(
    //   [HomeController::class, 'success'],
    //   ['details' => serialize($details)]
    // );

    // Redirect::to('success?details='. $details);

    // return $this->success($details);

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

  public function success($call_id)
  {
    // $call_id = $request->call_id;

    try {

      $call = ScheduledCall::find($call_id);

      $mentor_timezone = AvailableSchedule::where('mentor_id', $call->mentor_id)->where('date', Carbon::parse($call->date)->format('Y-m-d'))->first();

      $user_timezone = new \DateTime($call->date . ' ' . $call->start_time, new \DateTimeZone($call->utc));

      $user_timezone->setTimezone(new \DateTimeZone($mentor_timezone->time_zone));

      $mentor_finish_time = Carbon::parse($user_timezone->format('H:i:s'))->addMinutes($call->duration);

      $schedule = AvailableSchedule::where('mentor_id', $call->mentor_id)
        ->where('date', Carbon::parse($call->date)->format('Y-m-d'))
        ->where('start_time', $user_timezone->format('H:i:s'))
        ->first();

      $mentor = User::find($call->mentor_id);
      $user = User::find($call->user_id);

      $details = [
        'mentor' => $call->mentor_id,
        'mentor_name' => $mentor->name,
        'user_name' => $user->name,
        'user_id' => $call->user_id,
        'desc' => $call->description,
        'user' => $user->name,
        'date' => $call->date,
        'start_time' => $call->start_time,
        'finish_time' => $call->end_time,
        'UTC' => $call->utc,
        'duration' => $call->duration,
        'mentor_timezone' => $mentor_timezone->time_zone,
        'mentor_start_time' => $user_timezone->format('h:i A'),
        'mentor_finish_time' => $mentor_finish_time->format('h:i A'),
      ];

      Mail::to($mentor->email)->send(new ScheduleCallRequest($details));
      Mail::to($user->email)->send(new ScheduleCallRequestUser($details));

      $admin = User::where('role_id', 1)->first();

      // if (!empty($call_id)) {
      //   ScheduledCall::find($call_id)->update(['status' => 'Rejected']);

      //   $mentor->notify(new CallRejectedUser($user));
      //   $admin->notify(new CallRejectedAdmin($user));
      //   $admin->notify(new UpdateSessionAdmin($user));

      //   Mail::to('info@wiseadvizor.com')->send(new updateSessionMail($details));
      //   Mail::to($mentor->email)->send(new RejectedCallMail($details));
      //   Mail::to($user->email)->send(new RejectedCallUserMail($details));
      // }

      $mentor->notify(new NewCallRequest($user));
      $admin->notify(new NewCallRequestAdmin($user));

      return view('success', compact('details', 'mentor'));

    } catch (Exception $e) {
      if (451 == $e->getCode()) {
        return view('success', compact('details', 'mentor'));
      }
    }

    // return view('success', compact('details', 'mentor'));
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

  public function libraries()
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
    $password = Hash::make('Ivy@123!');
    // dd($password);

    return view('test');
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

  public function token(Request $request)
  {
    dd($request->token);
    // dd($request->all());

    // $gateway = new \Braintree\Gateway([
    //   'environment' => env('BRAINTREE_ENV'),
    //   'merchantId' => env("BRAINTREE_MERCHANT_ID"),
    //   'publicKey' => env("BRAINTREE_PUBLIC_KEY"),
    //   'privateKey' => env("BRAINTREE_PRIVATE_KEY")
    // ]);

    $request->validate([
      'paymentToken' => 'required',
      // Add other necessary validation rules
    ]);

    // Process the payment using your payment gateway
    $paymentToken = $request->input('paymentToken');

    // Perform actions with the payment token (e.g., send it to the payment gateway)
    // Note: This is a simplified example, and you need to replace it with your actual payment gateway logic.

    // Example:
    $paymentGatewayResponse = $this->processPayment($paymentToken);

    // Check the payment gateway response and handle accordingly
    if ($paymentGatewayResponse['success']) {
      // Payment successful
      return response()->json(['message' => 'Payment successful']);
    } else {
      // Payment failed
      return response()->json(['message' => 'Payment failed', 'error' => $paymentGatewayResponse['error']], 400);
    }

    $call_data = ScheduledCall::find($request->call_id);

    if (!empty($request->nonce)) {
      $nonceFromTheClient = $request->nonce;

      $mentor = User::find($call_data->mentor_id);
      $price_per_call = $mentor->metaData->price_per_call;

      $gateway->transaction()->sale([
        'amount' => $price_per_call,
        'paymentMethodNonce' => $nonceFromTheClient,
        'options' => [
          'submitForSettlement' => True
        ]
      ]);

      try {

        $mentor_timezone = AvailableSchedule::where('mentor_id', $call_data->mentor_id)->where('date', Carbon::parse($call_data->date)->format('Y-m-d'))->first();

        $user_timezone = new \DateTime($call_data->date . ' ' . $call_data->start_time, new \DateTimeZone($call_data->utc));

        $user_timezone->setTimezone(new \DateTimeZone($mentor_timezone->time_zone));

        $mentor_finish_time = Carbon::parse($user_timezone->format('H:i:s'))->addMinutes($call_data->duration);

        $schedule = AvailableSchedule::where('mentor_id', $call_data->mentor_id)
          ->where('date', Carbon::parse($call_data->date)->format('Y-m-d'))
          ->where('start_time', $user_timezone->format('H:i:s'))
          ->first();

        $schedule->update([
          'is_booked' => 1,
          'call_id' => $call_data->id
        ]);

        $call_data->update([
          'is_paid' => 1
        ]);

        $mentor = User::find($call_data->mentor_id);
        $user = User::find($call_data->user_id);

        $details = [
          'mentor' => $call_data->mentor_id,
          'mentor_name' => $mentor->name,
          'user_name' => $user->name,
          'user_id' => $call_data->user_id,
          'desc' => $call_data->description,
          'user' => $user->name,
          'date' => $call_data->date,
          'start_time' => $call_data->start_time,
          'finish_time' => $call_data->end_time,
          'UTC' => $call_data->utc,
          'duration' => $call_data->duration,
          'mentor_timezone' => $mentor_timezone->time_zone,
          'mentor_start_time' => $user_timezone->format('h:i A'),
          'mentor_finish_time' => $mentor_finish_time->format('h:i A'),
        ];

        Mail::to($mentor->email)->send(new ScheduleCallRequest($details));
        Mail::to($user->email)->send(new ScheduleCallRequestUser($details));

        $admin = User::where('role_id', 1)->first();

        $mentor->notify(new NewCallRequest($user));
        $admin->notify(new NewCallRequestAdmin($user));

        return view('success', compact('details', 'mentor'));

      } catch (Exception $e) {
        if (451 == $e->getCode()) {
          return view('success', compact('details', 'mentor'));
        }
      }

      return view('success', compact('details', 'mentor'));

      // return $this->success($request->call_id);
    } else {
      $clientToken = $gateway->clientToken()->generate();
      return view('payment', compact('clientToken', 'call_data'));
    }
  }

  public function processPayment($paymentToken)
  {
    // Implement your payment gateway integration logic here
    // This is a placeholder and should be replaced with your actual logic

    // Simulate a successful payment for demonstration purposes
    // Replace this with your actual payment gateway integration logic
    $success = true;
    $error = null;

    // Return a response
    return ['success' => $success, 'error' => $error];
  }
}