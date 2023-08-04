<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
    $times = AvailableSchedule::where('mentor_id', $scheduled_call->mentor_id)->where('date', $scheduled_call->date)->where('is_booked', 0)->get();
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
      'mentor_id' => $scheduled_call->mentor_id,
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
    $id = Auth::id();
    $profile = User::find($id);

    return view('users.profile', compact('profile'));
  }

  public function getDateAvailability($scheduled_call)
  {
    $timezone = $scheduled_call->time_zone;
    $date = Carbon::parse($scheduled_call->date);
    $month = $date->format('m');
    $year = $date->format('Y');
    $mentor = $scheduled_call->mentor_id;
    $date = AvailableSchedule::where('mentor_id', $mentor)->whereYear('date', '=', $year)
      ->whereMonth('date', '=', $month)->get();

    $dates = array();

    foreach ($date as $dt) {
      $dates[] = Carbon::parse($dt->date)->format('d');
    }

    return $dates;
  }
}