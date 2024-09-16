<?php

namespace App\Http\Controllers;

use App\Mail\askQuestionMail;
use App\Mail\ReferralDiscountEmail;
use App\Mail\RejectedCallMail;
use App\Mail\RejectedCallUserMail;
use App\Mail\updateSessionMail;
use App\Models\Article;
use App\Models\BlogCategories;
use App\Models\Blogs;
use App\Models\ExpertiseList;
use App\Models\MentorAchievements;
use App\Models\MentorsFaq;
use App\Models\Review;
use App\Models\UserFaq;
use App\Models\Voucher;
use App\Models\Webinar;
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
use Illuminate\Support\Facades\Validator;
use App\Notifications\CallRejectedUser;
use Illuminate\Support\Facades\Redirect;
use Exception;
use App\Models\SubscriptionList;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;
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
    $calls = ScheduledCall::where('is_paid', 1)->get()->count();
    $reviews = Review::where('is_approved', 0)->get();
    $completed_sessions = ScheduledCall::where('status', 'Approved')->where('is_paid', 1)->get()->count() * 30;


    if (Auth::id() && auth()->user()->role_id == 3) {
      if (Auth::user()->metaData) {
        return redirect()->route('user.dashboard')->withSuccess('You have Successfully loggedin');
      } else {
        return redirect()->route('user.personalInfo', [Auth::id()])->withSuccess('You have Successfully loggedin');
      }
    } else {
      return view('home', compact('mentors', 'users', 'calls', 'reviews', 'completed_sessions'));
    }
  }

  public function profile($id, $name = null)
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

    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }
    // $expertise = [


    // dd($achievements);

    return view('profile', compact('data', 'experience', 'expertise', 'last_experience', 'achievements', 'reviews', 'articles', 'nextAvailability', 'totalReviews', 'totalSessions', 'notifications'));
  }

  public function browseMentor(Request $request, $expertise_name = NULL)
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
      $sortby = $filters['sort_by'] ?? 'asc';
      $mentors = User::with(['expertise', 'availability'])
        ->where('role_id', 2)
        ->WhereNull('status')
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

          if ($filters['sort_by'])
            $query->orderBy('price', $filters['sort_by']);
        })
        // ->orderBy('price', $sortby)
        ->get();
      // ->sortByDesc('metaData.price_per_call');
    } elseif (!empty($expertise_name)) {
      $mentors = User::with(['expertise'])
        ->where('role_id', 2)
        ->WhereNull('status')
        ->whereHas('expertise', function ($query) use ($expertise_name) {
          /** @var Builder $query */
          if (!empty($expertise_name))
            $query->where('expertise', 'LIKE', '%' . $expertise_name . '%');
        })->get();
    } else {
      $mentors = User::where('role_id', 2)->whereNull('status')->get();
    }

    $price = User::where('role_id', 2)->whereNull('status')->get();
    $slot = AvailableSchedule::where('date', '>=', now())->get();
    $expertise = ExpertiseList::where('is_active', 0)->get();

    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    if ((!empty($filters)) || (!empty($expertise_name))) {
      return view('browsers', compact('mentors', 'slot', 'price', 'expertise', 'expertise_name', 'filters', 'notifications'));
    } else {
      return view('browse-mentor', compact('mentors', 'slot', 'expertise', 'expertise_name', 'price', 'notifications'));
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
    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    if (!(Auth::id() && auth()->user()->role_id == 3)) {
      return view('be-a-mentor', compact('notifications'));
    }
  }

  public function contactUs()
  {
    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    return view('contact-us', compact('notifications'));
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
      alert("Be a Mentor Requested Successfully!");
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

    $referral_code_used = UserMeta::where('user_id', Auth::id())->first()->referral_code_used;

    $mentor = User::find($request->id);
    $timezone = \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);
    $nextAvailability = AvailableSchedule::where('mentor_id', $request->id)
      ->whereDate('date', '>', now())
      ->where('is_booked', 0)
      ->orderBy('date', 'asc')
      ->first();

    $client_id = env('PAYPAL_LIVE_CLIENT');

    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }



    // $user = User::find($email);

    // if ($user->role_id == 3 && $user->metaData) {
    return view('schedule-call', compact('mentor', 'timezone', 'nextAvailability', 'call', 'client_id', 'notifications', 'referral_code_used'));
    // } 
  }

  public function howitWorks()
  {

    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    return view('how-it-works', compact('notifications'));
  }

  public function addScheduleRequest(Request $request)
  {
    $requestData = $request->all();
    $data = array();
    parse_str($requestData['data'], $data);
    $id = json_encode($data['mentor']);

    $voucher = Voucher::where('name', $data['discount_code'])->first();

    $validator = Validator::make($data, [
      'desc' => 'required',
      'time' => 'required',
      'timezone' => 'required',
    ]);

    $referral_code_used = UserMeta::where('user_id', Auth::id())->first()->referral_code_used;

    if (($data['discount_code'] != $referral_code_used) && !empty($data['discount_code'])) {
      $validator->after(function ($validator) use ($voucher) {
        if (!$voucher) {
          $validator->errors()->add('discount_code', 'Invalid Voucher');
        }
      });
    }

    $validator->validate();

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

    $mentor = User::find($data['mentor']);

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

    $clientSecret = env('STRIPE_SECRET_KEY');

    $stripe = new \Stripe\StripeClient($clientSecret);

    Stripe::setApiKey($clientSecret);

    if ($voucher) {

      // if($voucher->discount_type == "fixed") {
      //   $discount_value =  $voucher->discount_value;
      // }
      // else {
      $discount_value = $voucher->discount_value;

      $coupon = $stripe->coupons->create([
        'percent_off' => $discount_value,
        'duration' => 'once',
      ]);
      // }
    } elseif ($data['discount_code'] == $referral_code_used) {
      $discount_value = UserMeta::where('referral_code', $referral_code_used)->first() ? UserMeta::where('referral_code', $referral_code_used)->first()->referral_discount_value : '';
      $coupon = $stripe->coupons->create([
        'percent_off' => $discount_value,
        'duration' => 'once',
      ]);
    } else {
      $discount_value = 0;
      $coupon = null;
    }

    $price = $data['price'] * 100;

    if (!$coupon) {
      $coupon_id = null;
    } else {
      $coupon_id = $coupon['id'];

    }

    // $session = Session::create([
    //   'line_items' => [[
    //     # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    //     'price' => $data['price'],
    //     'quantity' => 1,
    //   ]],
    //   'mode' => 'payment',
    //   'success_url' => route('success-test'),
    //   'cancel_url' => route('cancel'),
    // ]);

    $session = Session::create([
      'line_items' => [
        [
          'price_data' => [
            'currency' => 'usd',
            'product_data' => [
              'name' => $data['duration'] . ' Minute meeting with ' . $mentor->name,
            ],
            'unit_amount_decimal' => round($price)
          ],
          'quantity' => 1,
        ],
      ],
      'discounts' => [['coupon' => $coupon_id]],
      'mode' => 'payment',
      'success_url' => route('success', [$call['id']]),
      'cancel_url' => route('cancel'),
    ]);

    return response()->json($session->url);

    // return redirect()->$session->url;

    // if (Auth::id() && auth()->user()->role_id == 3) {    
    //     $notifications = auth()->user()->unreadNotifications;
    // }
    // else {
    //      $notifications = '';
    // }
    // $gateway = new \Braintree\Gateway([
    //   'environment' => env("BRAINTREE_ENV"),
    //   'merchantId' => env("BRAINTREE_MERCHANT_ID"),
    //   'publicKey' => env("BRAINTREE_PUBLIC_KEY"),
    //   'privateKey' => env("BRAINTREE_PRIVATE_KEY")
    // ]);

    // $clientToken = $gateway->clientToken()->generate();

    // if($data['mentor'] == 143)
    // {
    //    return view('test-gateway',  compact('call_data'));
    // }
    //  return view('payment', compact('call_data', 'client_id', 'notifications'));

    // return redirect()->route('checkout');

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

      // $call->update(['is_paid' => 1]);

      $mentor_timezone = AvailableSchedule::where('mentor_id', $call->mentor_id)->where('date', Carbon::parse($call->date)->format('Y-m-d'))->first();

      $user_timezone = new \DateTime($call->date . ' ' . $call->start_time, new \DateTimeZone($call->utc));

      $user_timezone->setTimezone(new \DateTimeZone($mentor_timezone->time_zone));

      $mentor_finish_time = Carbon::parse($user_timezone->format('H:i:s'))->addMinutes($call->duration);

      $schedule = AvailableSchedule::where('mentor_id', $call->mentor_id)
        ->where('date', Carbon::parse($call->date)->format('Y-m-d'))
        ->where('start_time', $user_timezone->format('H:i:s'))
        ->first();

      $schedule->update([
        'is_booked' => 1,
        'call_id' => $call->id
      ]);

      $call->update([
        'is_paid' => 1
      ]);

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

      $referral_code_used = $user->metaData->referral_code_used ?: '';
      if (!empty($referral_code_used)) {
        $referred_user = UserMeta::where('referral_code', $referral_code_used)->first();
        $referred_user_data = User::find($referred_user->user_id);
        $details = [
          'name' => $referred_user_data->name,
          'discount_code' => $referral_code_used
        ];

        Mail::to($referred_user_data->email)->send(new ReferralDiscountEmail($details));
      }


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

      if (Auth::id() && auth()->user()->role_id == 3) {
        $notifications = auth()->user()->unreadNotifications;
      } else {
        $notifications = '';
      }

      return view('success', compact('details', 'mentor', 'notifications', 'call_id'));

    } catch (Exception $e) {
      if (451 == $e->getCode()) {
        return view('success', compact('details', 'mentor', 'notifications', 'call_id'));
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
    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    return view('terms-conditions', compact('notifications'));
  }

  public function privacyPolicy()
  {
    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    return view('privacy-policy', compact('notifications'));
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
    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    return view('resources', compact('notifications'));
  }

  public function blogs()
  {

    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    $blogs = Blogs::where('deleted_at', '=', null)->get();
    $featured_blog1 = Blogs::where('is_featured', 1)->latest()->first();
    $featured_blog2 = Blogs::where('id', '!=', $featured_blog1->id)->where('is_featured', 1)->latest()->first();
    $featured_blog3 = Blogs::where('id', '!=', $featured_blog2->id)->where('id', '!=', $featured_blog1->id)->where('is_featured', 1)->latest()->first();
    $categories = BlogCategories::get();

    return view('blogs', compact('blogs', 'featured_blog1', 'featured_blog2', 'featured_blog3', 'categories', 'notifications'));
  }

  public function blogDetailPage($id)
  {
    $blog = Blogs::find($id);

    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    return view('blog-detail', compact('blog', 'notifications'));
  }

  public function faq()
  {
    $userFaq = UserFaq::get();
    $mentors_faq = MentorsFaq::get();

    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    return view('faq', compact('userFaq', 'mentors_faq', 'notifications'));
  }

  public function communityGuidelines()
  {
    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    return view('community-guidelines', compact('notifications'));
  }

  public function libraries()
  {
    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    return view('libraries', compact('notifications'));
  }

  public function communityPosts()
  {
    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }

    return view('community-post', compact('notifications'));
  }

  public function aboutUs()
  {
    if (Auth::id() && auth()->user()->role_id == 3) {
      $notifications = auth()->user()->unreadNotifications;
    } else {
      $notifications = '';
    }


    return view('about-us', compact('notifications'));
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

    // $password = Hash::make('Nevra@123!*');
    // dd($password);

    // $filters = $request['filters'];

    //  $data =  ScheduledCall::where('is_paid', 0)->get();

    //  foreach($data as  $dt) {
    //    ScheduledCall::find($dt->id)->update([
    //     'is_paid' => 1
    //    ]);
    //  }

    // $tzlist = \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);
    // dd($tzlist);

    // if (!empty($filters)) {
    //   $sortby = $filters['sort_by'] ?? 'asc';
    //   $mentors = User::with(['expertise', 'availability'])
    //     ->where('role_id', 2)
    //     ->WhereNull('status')
    //     ->whereHas('expertise', function ($query) use ($filters) {
    //       /** @var Builder $query */
    //       if ($filters['expertise'])
    //         $query->where('expertise', 'LIKE', '%' . $filters['expertise'] . '%');
    //     })
    //     ->whereHas('availability', function ($query) use ($filters) {
    //       /** @var Builder $query */
    //       if ($filters['date'])
    //         $query->whereDate('date', '=', $filters['date']);
    //     })
    //     ->when((!empty($filters)), function ($query) use ($filters) {
    //       /** @var Builder $query */
    //       if ($filters['name'])
    //         $query->where('name', $filters['name']);

    //       if($filters['sort_by'])
    //       $query->orderBy('price', $filters['sort_by']);
    //     })
    //     // ->orderBy('price', $sortby)
    //     ->get();
    //   // ->sortByDesc('metaData.price_per_call');
    // } else {
    //   $mentors = User::where('role_id', 2)->whereNull('status')->get();
    // }

    // $price = User::where('role_id', 2)->whereNull('status')->get();
    // $slot = AvailableSchedule::where('date', '>=', now())->get();
    // $expertise = ExpertiseList::get();

    // return view('test', compact('mentors', 'slot', 'expertise', 'price'));

    // if (!empty($filters)) {
    //   $sortby = $filters['sort_by'] ?? 'asc';
    //   $mentors = User::with(['expertise', 'availability'])
    //     ->where('role_id', 2)
    //     ->WhereNull('status')
    //     ->whereHas('expertise', function ($query) use ($filters) {
    //       /** @var Builder $query */
    //       if ($filters['expertise'])
    //         $query->where('expertise', 'LIKE', '%' . $filters['expertise'] . '%');
    //     })
    //     ->whereHas('availability', function ($query) use ($filters) {
    //       /** @var Builder $query */
    //       if ($filters['date'])
    //         $query->whereDate('date', '=', $filters['date']);
    //     })
    //     ->when((!empty($filters)), function ($query) use ($filters) {
    //       /** @var Builder $query */
    //       if ($filters['name'])
    //         $query->where('name', $filters['name']);

    //       if ($filters['sort_by'])
    //         $query->orderBy('price', $filters['sort_by']);
    //     })
    //     // ->orderBy('price', $sortby)
    //     ->get();
    //   // ->sortByDesc('metaData.price_per_call');
    // } else {
    //   $mentors = User::where('role_id', 2)->whereNull('status')->get();
    // }

    // $price = User::where('role_id', 2)->whereNull('status')->get();
    // $slot = AvailableSchedule::where('date', '>=', now())->get();
    // $expertise = ExpertiseList::get();

    // if (!empty($filters)) {
    //   return view('browsers', compact('mentors', 'slot', 'price', 'expertise', 'filters'));
    // } else {
    //   return view('test', compact('mentors', 'slot', 'expertise', 'price'));
    // }

    // return view('test');
  }

  public function blogSample()
  {
    $blogs = Blogs::where('deleted_at', '=', null)->get();
    $featured_blogs = Blogs::where('is_featured', 1)->latest()->take(3)->get();
    $categories = BlogCategories::get();

    return view('test', compact('blogs', 'featured_blogs', 'categories'));
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

  public function subscriptionList(Request $request)
  {
    SubscriptionList::create([
      'email_id' => $request->email
    ]);

    ?>
    <script type="text/javascript">
      alert("Subscribed to the newsletter!");
      window.location.href = "https://wiseadvizor.com";
    </script>
    <?php
  }

  public function saveWebinar(Request $request)
  {
    $request->validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required|email',
      'message' => 'required',
    ]);

    $email = 'info@wiseadvizor.com';

    $details = Webinar::create([
      'firstname' => $request->first_name,
      'lastname' => $request->last_name,
      'email' => $request->email,
      'message' => $request->message,
    ]);

    Mail::to($email)->send(new askQuestionMail($details));

    ?>
    <script type="text/javascript">
      alert("Your slot registration has been submitted!");
      window.location.href = "https://learning.wiseadvizor.com";
    </script>
    <?php
  }

  public function ask_question(Request $request)
  {
    $request->validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required|email',
      'message' => 'required',
    ]);

    $email = 'info@wiseadvizor.com';

    $details = Contact::create([
      'firstname' => $request->first_name,
      'lastname' => $request->last_name,
      'email' => $request->email,
      'message' => $request->message,
    ]);

    Mail::to($email)->send(new askQuestionMail($details));

    ?>
    <script type="text/javascript">
      alert("Your query has been submitted!");
      window.location.href = "https://wiseadvizor.com/faq";
    </script>
    <?php
  }

  public function blogCategories($id, $name)
  {
    $blogs = Blogs::where('category_id', $id)->where('deleted_at', null)->get();
    $category = BlogCategories::find($id);

    return view('categories', compact('blogs', 'category'));
  }

  public function blogDetail($id, $name)
  {
    $selectedBlog = Blogs::find($id);

    $related_posts = Blogs::where('id', '!=', $id)->latest()->take(3)->get();

    return view('blog-detail', compact('selectedBlog', 'related_posts'));
  }

  public function test_gateway()
  {
    return view('test-gateway');
  }
}