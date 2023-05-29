<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LoginActivity;
use App\Models\Setting;
use App\Models\TodoList;
use App\Models\User;
use App\Models\UserMeta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        //    $role = Roles
        $total_users = User::where('role_id', 3)->count();
        $total_amount = '';
        $total_earnings = '';
        $total_call_scheduled = '';
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

        return view('admin.view_profile', compact('data'));
    }

    public function list_mentors()
    {
        $mentors = User::where('role_id', 2)->get();

        return view('admin.mentors', compact('mentors'));
    }

    public function mentors_profile($id)
    {
        $mentor = User::find($id);

        return view('admin.mentors_profile', compact('mentor'));
    }

    public function reviews($id=null)
    {
        return view('admin.reviews');
    }

    public function experience($id=null)
    {
        $data = UserMeta::where('user_id', $id)->first();

        return view('admin.experience', compact('data'));
    }

    public function expertise($id=null)
    {
        return view('admin.expertise');
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
    }

    public function update_todo_status($id)
    {
        TodoList::find($id)->update(['is_done' => 1]);
    }

    public function delete_todo_status($id)
    {
        TodoList::find($id)->delete();
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
        $request->profile_pic->move(public_path('assets/img'), $pro_pic);

        $users = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->pass),
            'role_id' => 3,
        ];

        $user_record = User::updateOrCreate(
            ['id' => $request->row_id],
            $users
        );

        $meta_data = [
            'user_id' => $user_record['id'],
            'mobile' => $request->phone,
            'company' => $request->company,
            'designation' => $request->designation,
            'address' => $request->address,
            'social_linked_in' => $request->linkedin,
            'industry' => $request->industry,
            'expertise' => $request->expertise,
            'language' => $request->language,
            'profile_pic' => $pro_pic
        ];

        UserMeta::update_user_details($request->row_id, $meta_data);
    }

    public function add_mentors($id = null)
    {
        $data = '';

        if (!empty($id)) {
            $data = User::find($id);
        }

        return view('admin.add-mentors', compact('data'));
    }

    public function save_mentors(Request $request)
    {
        $pro_pic = time() . '.' . $request->profile_pic->getClientOriginalExtension();
        $request->profile_pic->move(public_path('assets/img'), $pro_pic);
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
            'commission' => $request->commission,
            'language' => json_encode($request->languages)
        ];

        UserMeta::update_user_details($request->row_id, $meta_data);
    }

    public function login_history()
    {
        $activities = LoginActivity::get();

        return view('admin.login_history', compact('activities'));
    }

    public function logs()
    {
        $data = '';
        // dd($monolog);

        return view('admin.logs', compact('data'));
    }
}
