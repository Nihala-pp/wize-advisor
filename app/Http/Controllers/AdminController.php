<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\CredentialEmail;
use App\Mail\TaskCreationMail;
use App\Models\Blogs;
use App\Models\Expertise;
use App\Models\ExpertiseList;
use App\Models\LoginActivity;
use App\Models\Review;
use App\Models\Setting;
use App\Models\TodoList;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\ScheduledCall;
use App\Models\MentorsExperience;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Notifications\CustomNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Hash;
use Illuminate\Support\Facades\Auth;

// use CustomNotification;

class AdminController extends Controller
{
    public function index()
    {
        //    $role = Roles
        $total_users = User::where('role_id', 3)->count();
        $total_amount = ScheduledCall::get()->sum('price');
        $total_earnings = ScheduledCall::get()->sum('price');
        $total_call_scheduled = ScheduledCall::get()->count();
        $total_mentors = User::where('role_id', 2)->count();
        $notifications = auth()->user()->unreadNotifications;
        $todolists = TodoList::where('is_done', 0)->get();


        return view('index', compact('total_users', 'total_mentors', 'total_call_scheduled', 'total_earnings', 'total_amount', 'notifications', 'todolists'));
    }

    public function user_profiles()
    {
        $users = User::where('role_id', 3)->get();

        return view('admin.user_list', ['users' => $users]);
    }

    public function view_profile($id)
    {
        Log::info('Showing user profile for user: ' . $id);

        $data = User::find($id);

        $scheduled_calls = ScheduledCall::where('user_id', $id)->where('status', 'Approved')->where('date', '>=', Carbon::now())->get();


        return view('admin.view_profile', compact('data', 'scheduled_calls'));
    }

    public function list_mentors()
    {
        $mentors = User::where('role_id', 2)->get();

        return view('admin.mentors', compact('mentors'));
    }

    public function mentors_profile($id)
    {
        $mentor = User::find($id);

        $scheduled_calls = ScheduledCall::where('user_id', $id)->where('status', 'Approved')->where('date', '>=', Carbon::now())->get();

        return view('admin.mentors_profile', compact('mentor', 'scheduled_calls'));
    }

    public function reviews($id = null)
    {
        $reviews = Review::get();

        return view('admin.reviews', compact('reviews'));
    }

    public function experience($id = null)
    {
        $data = UserMeta::where('user_id', $id)->first();

        return view('admin.experience', compact('data'));
    }

    public function expertise($id = null)
    {
        $expertise = ExpertiseList::get();

        return view('admin.expertise', compact('expertise'));
    }

    public function editExpertise(Request $request)
    {

        $data = ExpertiseList::find($request->Id);


        return view('admin.edit-expertise', compact('data'));
    }

    public function addExpertise(Request $request)
    {

        // if($request->row_id)
        // {
        //     $data = ExpertiseList::find($request->row_id);
        // }
        // else {
        //     $data = '';
        // }

        return view('admin.add-expertise');
    }

    public function deleteExpertise()
    {

    }

    public function scheduledCalls()
    {
        return view('admin.scheduled-calls');
    }

    public function signin()
    {
        return view('admin.sign-in');
    }

    public function signup()
    {
        return view('admin.sign-up');
    }

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }

    public function addTodoList(Request $request)
    {
        $task = $request->all();
        TodoList::todo_List($task);

        Mail::to('info@wiseadvizor.com')->send(new TaskCreationMail($task));

        return redirect()->route('admin.dashboard');
    }

    public function update_todo_status($id)
    {
        TodoList::find($id)->update(['is_done' => 1]);

        return redirect()->route('admin.dashboard');
    }

    public function delete_todo_status($id)
    {
        TodoList::find($id)->delete();

        return redirect()->route('admin.dashboard');
    }

    public function viewTask(Request $request)
    {
        $list = TodoList::find($request->id);

        return response()->json($list->tasks);
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function updateSettings(Request $request)
    {
        $data = $request->all();
        $dt = array_shift($data);
        // dd($data);
        foreach ($data as $key => $value) {
            // dd($key);
            $settings[] = [
                'slug' => $key,
                'content' => $value,
            ];
        }
        // $rule = [
        //     'customer_id' => 'required',
        //     'cpt_code' => 'required',
        //     'icd10' => 'required',
        //     'deductible_type' => 'required',
        //     'deductible_amount' => 'required',
        //     'status' => 'required',
        // ];
        // $validated = do_validate($request->all(), $rule);

        // if (!$validated["status"]) {
        //     return $this->json_response("error", [], $validated["error"]);
        // }

        Setting::updateSettings($settings);

        return $this->json_response("success", $settings, __("Settings Saved"));
    }

    public function add_user($id = null)
    {
        $data = '';

        if (!empty($id)) {
            $data = User::find($id);
        }

        return view('admin.add-user', compact('data'));
    }

    public function create_user(Request $request)
    {
        $pro_pic = time() . '.' . $request->profile_pic->getClientOriginalExtension();
        $request->profile_pic->move(public_path('public/assets/img'), $pro_pic);

        $users = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->pass),
            'role_id' => 3,
        ];

        if (!empty($request->row_id)) {
            $user_record = User::find($request->row_id)->update(
                $users
            );
        } else {
            $user_record = User::create(
                $users
            );
        }

        $user_record->notify(new CustomNotification($user_record));

        $meta_data = [
            'user_id' => $user_record['id'],
            'mobile' => $request->phone,
            'company' => $request->company,
            'designation' => $request->designtion,
            'address' => $request->address,
            'social_linked_in' => $request->linkedin,
            'industry' => json_encode($request->industry),
            'expertise' => json_encode($request->expertise),
            'language' => json_encode($request->language),
            'profile_pic' => $pro_pic
        ];

        UserMeta::update_user_details($request->row_id, $meta_data);

        // Notification::send($users, new CustomNotification($meta_data));
    }

    public function add_mentors($id = null)
    {
        $data = '';

        $expertise = ExpertiseList::get();

        if (!empty($id)) {
            $data = User::find($id);
        }

        return view('admin.add-mentors', compact('data','expertise'));
    }

    public function save_mentors(Request $request)
    {
        // dd($request->all());
        $pro_pic = time() . '.' . $request->profile_pic->getClientOriginalExtension();
        $request->profile_pic->move(public_path('assets/img'), $pro_pic);
        // dd($request->all());
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make(Str::password(8)),
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
            'company_name' => json_encode($request->experience['company_name']),
            'year' => json_encode($request->experience['year']),
            'position' => json_encode($request->experience['position']),
            'end_date' => json_encode($request->experience['end_date']),
            'commission' => $request->commission,
            'language' => json_encode($request->languages)
        ];

        foreach ($request->expertise as $key => $expertise) {

            $expertise_data = [
                'mentor_id' => $user_record['id'],
                'expertise' => $expertise['name'],
                'description' => $expertise['desc']
            ];        

            Expertise::update_expertise($request->row_id, $expertise_data);

        }

        UserMeta::update_user_details($request->row_id, $meta_data);

        foreach ($request->experience['company_name'] as $key => $company_name) {
            $company = $company_name;
        }

        foreach ($request->experience['position'] as $key => $position) {
            $pos = $position;
        }

        foreach ($request->experience['year'] as $key => $year) {
            $start_date = $year;
        }

        foreach ($request->experience['end_date'] as $key => $end_date) {
            $resigned_date = $end_date;
        }

        MentorsExperience::updateOrCreate(
            ['user_id' => $user_record['id']],

            [
                'company_name' => $company,
                'position' => $pos,
                'start_date' => $start_date,
                'end_date' => $resigned_date
            ]
        );

        Mail::to($data['email'])->send(new CredentialEmail($data));
    }

    public function login_history()
    {
        $activities = LoginActivity::get();

        return view('admin.login_history', compact('activities'));
    }

    public function logs()
    {
        $data = '';

        return view('admin.logs', compact('data'));
    }

    public function saveExpertise(Request $request)
    {
        $pro_pic = time() . '.' . $request->profile_pic->getClientOriginalExtension();
        $request->profile_pic->move(public_path('wp-content/uploads/2023/06'), $pro_pic);

        ExpertiseList::updateOrCreate(
            ['id' => $request->row_id],

            [
                'name' => $request->expertise,
                'icon' => $request->profile_pic,
            ]
        );
    }

    public function vouchers()
    {
        $vouchers = Voucher::get();

        $mentors = User::where('role_id', 2)->get();

        return view('admin.vouchers', compact('vouchers', 'mentors'));
    }

    public function saveVouchers(Request $request)
    {
        Voucher::updateOrCreate(
            ['id' => $request->row_id],

            [
                'name' => $request->voucher,
                'discount_type' => $request->type,
                'mentor_id' => $request->mentor,
                'discount_value' => $request->discount_value,
            ]
        );
        ?>
        <script type="text/javascript">
            alert("Voucher Updated Successfully!");
            window.location.href = "https://wiseadvizor.com/admin/vouchers";
        </script>
        <?php
    }

    public function editVouchers(Request $request)
    {
        $vouchers = Voucher::find($request->Id);

        $mentors = User::where('role_id', 2)->get();

        return view('admin.edit-vouchers', compact('vouchers', 'mentors'));
    }

    public function deleteVouchers($id)
    {
        Voucher::find($id)->delete();

        ?>
        <script type="text/javascript">
            alert("Voucher Deleted Successfully!");
            window.location.href = "https://wiseadvizor.com/admin/vouchers";
        </script>
        <?php
    }

    public function blogs()
    {
        $blogs = Blogs::get();

        return view('admin.blogs', compact('blogs'));
    }

    public function saveBlogs(Request $request)
    {
        $pro_pic = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('wp-content/uploads/2023/07'), $pro_pic);

        Blogs::updateOrCreate(
            ['id' => $request->row_id],
            [
                'user_id' => Auth::id(),
                'title' => $request->title,
                'intro' => $request->introduction,
                'description' => $request->description,
                'image' => $request->end_date,
            ]
        );

        ?>
        <script type="text/javascript">
            alert("Blog Saved Successfully!");
                window.location.href = "https://wiseadvizor.com/admin/blogs";
        </script>
        <?php
    }

    public function deleteBlogs($id)
    {
        Blogs::find($id)->delete();

        ?>
        <script type="text/javascript">
            alert("Blogs Deleted Successfully!");
            window.location.href = "https://wiseadvizor.com/admin/blogs";
        </script>
        <?php
    }

    public function editBlogs($id)
    {
        $blogs = Blogs::find($id);

        return view('admin.edit-blogs', compact('blogs'));
    }

    public function approveReviews(Request $request)
    {
        Review::find($request->id)->update(
            [
                'is_approved' => 1
            ]
        );

        ?>
        <script type="text/javascript">
            alert("Reviews Approved Successfully!");
            window.location.href = "https://wiseadvizor.com/admin/reviews";
        </script>
        <?php
    }

    public function deleteReviews($id)
    {
        Review::find($id)->delete();

        ?>
        <script type="text/javascript">
            alert("Reviews Deleted Successfully!");
            window.location.href = "https://wiseadvizor.com/admin/reviews";
        </script>
        <?php
    }

    public function resources()
    {
        $resources = User::where('role_id', 2)->whereNull('status')->get();

        foreach ($resources as $resource) {
            $data[] = [
                'id' => $resource->id,
                'name' => $resource->name
            ];
        }

        return response()->json($data);
    }

    public function editBooking()
    {

    }

    public function deleteBooking()
    {

    }

    public function addBooking()
    {

    }
}