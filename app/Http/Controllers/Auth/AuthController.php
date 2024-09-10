<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmailUser;
use App\Notifications\SignupAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\AvailableSchedule;
use Hash;
use App\Rules\ReCaptcha;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */


    public function index($token = Null, $id = Null, $name = Null)
    {
        $mentor = null;

        if($id) {
            $mentor = User::find($id)->name;
        }

        return view('auth.login', compact('token', 'id', 'name', 'mentor'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration($token = Null, $id = Null, $keyword = Null)
    {

        if (!empty($id)) {
            $name = User::find($id)->name;
        } else {
            $name = Null;
        }

         $referral_code = User::where('referral_code', $token)->first();

        if(!empty($referral_code)) {
           $is_referral = 1;
           $referral_code_used = $token;
        }
        else {
            $is_referral = 0;
            $referral_code_used = '';
        }

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

        $timezone = \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);

        return view('auth.registration', compact('expertise', 'token', 'id', 'timezone', 'name', 'is_referral', 'referral_code_used'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (!($request->token == Null)) {
                return redirect()->route('schedule-call', [$request->mentor_id, $request->mentor_name])->withSuccess('You have Successfully loggedin');
            }

            if (auth()->user()->role_id == 1) {
                return redirect()->route('admin.dashboard')->withSuccess('You have Successfully loggedin');
            } elseif (auth()->user()->role_id == 2) {
                return redirect()->route('mentor.dashboard')->withSuccess('You have Successfully loggedin');
            } elseif (auth()->user()->role_id == 3) {
                return redirect()->route('user.dashboard')->withSuccess('You have Successfully loggedin');
            }
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        $credentials = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
            ]
        ]);

        $data = $request->all();
        $check = $this->create($data);
        $admin = User::find(1);
        $user = User::find($check);

        Mail::to($request->email)->send(new WelcomeEmailUser($data));
        $admin->notify(new SignupAdmin($user));

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            if (!($request->token == $request->referral_code_used)) {
                return redirect()->route('schedule-call', [$request->mentor_id])->withSuccess('You have Successfully loggedin');
            } else {
                return redirect()->route('user.dashboard')->withSuccess('You have Successfully loggedin');
            }
        } 
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('admin.dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        if($data['timezone'] == "Asia/Calcutta") {
          $timezone = "Asia/Kolkata";
        }
        else {
          $timezone = $data['timezone'];
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 3,
            'is_referral' => $data['is_referral'],
            'referral_code_used' => $data['referral_code_used']
        ]);

        UserMeta::create([
            'user_id' => $user['id'],
            // 'designation' => $data['designation'],
            // 'expertise' => json_encode($data['expert']),
            'timezone' => $timezone
        ]);

        return $user['id'];
    }

    /**
     * Write code on Method
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function personalInfo($id)
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

        $timezone = \DateTimeZone::listIdentifiers(\DateTimeZone::ALL);

        return view('auth.update-details', compact('id', 'expertise', 'timezone'));
    }

    public function savePersonalInfo(Request $request)
    {
        // dd($request->all());
        $newuser = User::find($request->user_id);

        UserMeta::create([
            'user_id' => $newuser->id,
            'company' => $request->company_name,
            'designation' => $request->designation,
            // 'expertise' => json_encode($request->expert),
            'social_linked_in' => $request->linked_in,
            'timezone' => $request->timezone
        ]);

        Auth::login($newuser);

        return redirect()->route('user.dashboard')->withSuccess('You have Successfully loggedin');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => [
            //         'required',
            //         Password::min(8)
            //             ->letters()
            //             ->mixedCase()
            //    ]
        ]);
    }
}