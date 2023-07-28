<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ScheduledCall;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\AvailableSchedule;
use App\Models\ZoomAPI;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Log;


class MentorController extends Controller
{

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;


    public function index()
    {
        $total_calls_scheduled = ScheduledCall::where('mentor_id', Auth::id())->get()->count();
        $total_calls_approved = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Approved')->get()->count();
        $total_calls_rejected = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Rejected')->get()->count();
        $total_earning = ScheduledCall::where('mentor_id', Auth::id())->sum('price');

        return view('mentors.index', compact('total_calls_scheduled', 'total_calls_approved', 'total_calls_rejected', 'total_earning'));
    }

    public function my_sessions()
    {
        $upcoming_sessions = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Approved')->where('date', '>=', Carbon::now())->get();
        $completed_sessions = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Approved')->where('date', '<', Carbon::now())->get();
        $requested_sessions = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Pending')->get();

        return view('mentors.sessions', compact('upcoming_sessions', 'completed_sessions', 'requested_sessions'));
    }

    public function profile()
    {
        $profile = User::find(Auth::id());
        $scheduled_calls = ScheduledCall::where('mentor_id', Auth::id())->where('status', 'Approved')->where('date', '>=', Carbon::now())->get();

        return view('mentors.profile', compact('profile', 'scheduled_calls'));
    }

    public function reviews()
    {
        $reviews = Review::where('mentor_id', Auth::id())->get();

        return view('mentors.reviews', compact('reviews'));
    }

    public function experience()
    {
        return view('mentors.experience');
    }

    public function expertise()
    {
        return view('mentors.expertise');
    }

    public function availability()
    {
        $timezones = AvailableSchedule::timezones();
        $weekStartDate = Carbon::parse('this monday')->toDateString();
        $availability = AvailableSchedule::where('mentor_id', Auth::id())->orderby('id', 'desc')->get();

        return view('mentors.availability', compact('timezones', 'weekStartDate', 'availability'));
    }

    public function update_status($id)
    {

        ScheduledCall::find($id)->update(['status' => 'Approved']);

        try {
            $url = "https://zoom.us/oauth/authorize?response_type=code&";
            $client_id = env('ZOOM_API_KEY');
            $client_secret = env('ZOOM_API_SECRET');
            $redirect_uri = env('REDIRECT_URI');
            $data = "client_id=$client_id&redirect_uri=$redirect_uri";
            $api_url = $url . $data;
            $authorization_code = $this->get_authorization_code($api_url);

            $code = $request->code;
            dd($code);

            $client = new \GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);


            // $authorization_code = redirect($api_url);
            // dd($authorization_code);

            $response = $client->request('POST', '/oauth/token', [
                "headers" => [
                    "Authorization" => "Basic " . base64_encode($client_id . ':' . $client_secret)
                ],
                'form_params' => [
                    "grant_type" => "authorization_code",
                    "code" => $code,
                    "redirect_uri" => $redirect_uri
                ],
            ]);

            $token = json_decode($response->getBody()->getContents(), true);

            ZoomAPI::update_access_token(json_encode($token));
            dd("Access token inserted successfully.");
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $call_link = $this->getZoomCallLink($id);
    }

    public function reject_call($id)
    {
        ScheduledCall::find($id)->update(['status' => 'Rejected']);

        $notification = array(
            'message' => 'Rejected Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('mentor.dashboard.my_sessions')
            ->with($notification, 'Rejected Successfully!');
    }

    public function add_mentors($id = null)
    {
        $data = '';

        if (!empty($id)) {
            $data = User::find($id);
        }

        return view('mentors.add-mentors', compact('data'));
    }

    public function account_status(Request $request)
    {
        dd($request->all());
    }

    public function delete_account(Request $request)
    {

    }

    public function save_mentors(Request $request)
    {
        $pro_pic = time() . '.' . $request->profile_pic->getClientOriginalExtension();
        $request->profile_pic->move(public_path('public/assets/img'), $pro_pic);
        // dd($request->all());
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 2,
        ];

        $user_record = User::updateOrCreate(
            ['id' => $request->row_id],
            $data
        );

        $meta_data = [
            'user_id' => $user_record['id'],
            'mobile' => $request->phone,
            'company' => $request->company,
            'designation' => $request->designation,
            'address' => $request->address,
            'social_linked_in' => $request->linked_in,
            'youtube_link' => $request->youtube_link,
            'website_link' => $request->website_link,
            'industry' => $request->industry,
            'expertise' => json_encode($request->expertise),
            'price_per_call' => $request->price_per_call,
            'profile_pic' => $pro_pic,
            'about_me' => $request->bio,
            'company_name' => $request->company_name,
            'year' => $request->year,
            'position' => $request->position,
            'language' => json_encode($request->languages)
        ];

        UserMeta::update_user_details($request->row_id, $meta_data);

        $notification = array(
            'message' => 'Profile Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('mentor.dashboard.profile')
            ->with($notification, 'Profile Updated Successfully!');
    }

    public function save_schedule(Request $request)
    {
        dd($request->all());
        foreach ($request->schedule as $key => $schedule) {
            $exists = AvailableSchedule::where('mentor_id', Auth::id())
                ->where('date', $schedule['date'])
                ->where('start_time', $schedule['start_time'])
                ->where('time_zone', $request->time_zone)
                ->first();

            if ($exists) {
                ?>
                <script type="text/javascript">
                    alert("Slot already exists...Please try again with different slot");
                    window.location.href = "https://wiseadvizor.com/mentor/dashboard/availability";
                </script>
                <?php
            } else {
                //  dd($schedule['start_time']);
                $data = [
                    'mentor_id' => Auth::id(),
                    'date' => $schedule['date'],
                    'time_zone' => $request->time_zone,
                    'start_time' => $schedule['start_time'],
                    'end_time' => $schedule['end_time']
                ];

                AvailableSchedule::update_schedule($request->row_id, $data);

                $notification = array(
                    'message' => 'Availability Added Successfully!',
                    'alert-type' => 'success'
                );

                return redirect()->route('mentor.dashboard.availability')
                    ->with($notification, 'Availability Added Successfully!');
            }
        }

        //   $data = [
        //     'mentor_id' => Auth::id(),
        //     'date' => $request->date,
        //     'time_zone' => $request->time_zone,
        //     'start_time' => $request->start_time,
        //     'end_time' => $request->end_time
        // ];

        // AvailableSchedule::update_schedule($request->row_id, $data);
    }

    public function getZoomCallLink($id)
    {
        $client_id = env('ZOOM_API_KEY');
        $client_secret = env('ZOOM_API_SECRET');
        $schedule = ScheduledCall::find($id);
        $date = $schedule->date . '\T' . $schedule->start_time;

        $request = new \Illuminate\Http\Request();

        $this->generateAccessToken($request);

        $client = new \GuzzleHttp\Client(['base_uri' => 'https://api.zoom.us']);

        $arr_token = $this->get_access_token();
        $accessToken = $arr_token->access_token;
        $url = '/v2/users/';
        $user = $schedule->user_id;
        $url_end = '/meetings';
        $api_url = $url . $user . $url_end;

        try {
            $response = $client->request('POST', $api_url, [
                "headers" => [
                    "Authorization" => "Bearer $accessToken"
                ],
                'json' => [
                    "topic" => "30 Min Meeting",
                    "type" => self::MEETING_TYPE_SCHEDULE,
                    "start_time" => $date,
                    "duration" => $schedule->duration,
                    "password" => "123456",
                    "timezone" => $schedule->utc,
                    "schedule_for" => $schedule->mentor_id,
                    "allow_multiple_devices" => true,
                    "alternative_hosts" => "ankur.sharma@wiseadvizor.com;nihala.pp@wiseadvizor.com",
                    "alternative_hosts_email_notification" => true,
                    "approval_type" => self::MEETING_TYPE_SCHEDULE,
                    "settings" => [
                        'host_video' => true,
                        'participant_video' => true,
                        'waiting_room' => true,
                    ],
                ],
            ]);

            $data = json_decode($response->getBody());
            echo "Join URL: " . $data->join_url;
            echo "<br>";
            echo "Meeting Password: " . $data->password;

        } catch (Exception $e) {
            if (401 == $e->getCode()) {
                $refresh_token = $this->get_refresh_token();

                $client = new \GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);
                $response = $client->request('POST', '/oauth/token', [
                    "headers" => [
                        "Authorization" => "Basic " . base64_encode($client_id . ':' . $client_secret)
                    ],
                    'form_params' => [
                        "grant_type" => "refresh_token",
                        "refresh_token" => $refresh_token
                    ],
                ]);

                ZoomAPI::update_access_token($response->getBody());

                $this->getZoomCallLink();
            } else {
                echo $e->getMessage();
            }
        }
        $this->getZoomCallLink();
    }

    public function generateAccessToken(Request $request)
    {
        try {
            $url = "https://zoom.us/oauth/authorize?response_type=code&";
            $client_id = env('ZOOM_API_KEY');
            $client_secret = env('ZOOM_API_SECRET');
            $redirect_uri = env('REDIRECT_URI');
            $data = "client_id=$client_id&redirect_uri=$redirect_uri";
            $api_url = $url . $data;
            $authorization_code = $this->get_authorization_code($api_url);

            $code = $request->code;
            dd($code);

            $client = new \GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);


            // $authorization_code = redirect($api_url);
            // dd($authorization_code);

            $response = $client->request('POST', '/oauth/token', [
                "headers" => [
                    "Authorization" => "Basic " . base64_encode($client_id . ':' . $client_secret)
                ],
                'form_params' => [
                    "grant_type" => "authorization_code",
                    "code" => $code,
                    "redirect_uri" => $redirect_uri
                ],
            ]);

            $token = json_decode($response->getBody()->getContents(), true);

            ZoomAPI::update_access_token(json_encode($token));
            dd("Access token inserted successfully.");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function get_access_token()
    {

        $data = ZoomAPI::where('provider', 'zoom')->first();

        return json_decode($data->provider_value);
    }

    public function get_refresh_token()
    {
        $result = $this->get_access_token();
        return $result->refresh_token;
    }

    public function test()
    {
        $client_id = env('ZOOM_API_KEY');
        $redirect_uri = env('REDIRECT_URI');

        return view('test', compact('client_id', 'redirect_uri'));
    }

    public function get_authorization_code($url)
    {
        return redirect($url);
    }

    public function success(Request $request)
    {
        return $request->code;
    }

    public function editAvailability(Request $request)
    {
        $availability = AvailableSchedule::find($request->Id);
        $timezones = AvailableSchedule::timezones();

        return view('mentors.edit-availability', compact('availability', 'timezones'));
    }

    public function edit_schedule(Request $request)
    {
        $exists = AvailableSchedule::where('mentor_id', Auth::id())
            ->where('date', $request->date)
            ->where('start_time', $request->start_time)
            ->where('time_zone', $request->time_zone)
            ->first();

        if ($exists) {
            ?>
            <script type="text/javascript">
                alert("Slot already exists...Please try again with different slot");
                window.location.href = "https://wiseadvizor.com/mentor/dashboard/availability";
            </script>
            <?php
        }

        $schedule = [
            'mentor_id' => Auth::id(),
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'date' => $request->date,
            'time_zone' => $request->time_zone
        ];

        AvailableSchedule::find($request->row_id)->update($schedule);

        $notification = array(
            'message' => 'Availability Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('mentor.dashboard.availability')
            ->with($notification, 'Availability Updated Successfully!');

    }

    public function deleteAvailability(Request $request)
    {
        AvailableSchedule::find($request->Id)->delete();

        $notification = array(
            'message' => 'Availability Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('mentor.dashboard.availability')
            ->with($notification, 'Availability Deleted Successfully!');

    }
}