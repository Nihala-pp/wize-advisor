<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\TodoList;
use App\Models\User;
use App\Models\UserMeta;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    public function view_profile()
    {
        return view('admin.view_profile');
    }

    public function list_mentors()
    {
        return view('admin.mentors');
    }

    public function mentors_profile()
    {
        return view('admin.mentors_profile');
    }

    public function reviews()
    {
        return view('admin.reviews');
    }

    public function experience()
    {
        return view('admin.experience');
    }

    public function expertise()
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

    public function add_user()
    {
        return view('admin.add-user');
    }

    public function create_user(Request $request)
    {
        // dd($request->name);
        $users = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->pass),
            'role_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $user_record = User::create([
            $users
        ]);

        $meta_data = [
            'user_id' => $user_record->id,
            'mobile' => $request->phone,
            'company' => $request->company,
            'designation' => $request->designation,
            'address' => $request->address,
            'social_linked_in' => $request->linkedin,
            'industry' => $request->industry,
            'expertise' => $request->expertise,
            'language' => $request->language,
        ];

        UserMeta::update_user_details($meta_data);
    }
}
