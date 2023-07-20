<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Session;
use App\Models\User;
use App\Models\UserMeta;
use Hash;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index($token='Null', $id='Null')
    {
        return view('auth.login', compact('token', 'id'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration($token='Null', $id='Null')
    {
        $expertise = [
            '1'  =>	 'Sales',
            '2'  =>	 'Marketing',
            '3'  =>	 'Technology',
            '4'  =>	 'Idea Validation',
            '5'  =>	 'Product Market Fit',
            '6'  =>	 'Team Management',
            '7'  =>	 'Content creation',
            '8'  =>	 'Leadership',
            '9'  =>	 'Fund raising',
            '10' =>  'Networking',
            '11' =>  'Social Media',
            '12' =>  'Pricing Strategy',
            '13' =>  'Startup valuation',
            '14' =>  'Business Strategy',
            '15' =>  'Email Marketing',
            '16' =>  'Brand Building ',
            '17' =>	 'SEO',
            '18' =>	 'Operations and logistics',
            '19' =>	 'Risk Management',
            '20' =>	 'Ads Strategy',
            '21' =>	 'Go to Market Strategy',
            '22' =>	 'Growth Strategy'          
        ];

        return view('auth.registration', compact('expertise', 'token', 'id'));
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

            if(!($request->token == "Null")) 
            {
               return redirect()->route('schedule-call', [$request->mentor_id])->withSuccess('You have Successfully loggedin'); 
            }

            if (auth()->user()->role_id == 1) {
                return redirect()->route('admin.dashboard')->withSuccess('You have Successfully loggedin');
            } elseif (auth()->user()->role_id == 2) {
                return redirect()->route('mentor.dashboard')->withSuccess('You have Successfully loggedin'); 
            } elseif (auth()->user()->role_id == 3) {
                return redirect()->route('user.dashboard')->withSuccess('You have Successfully loggedin');
            }          

            // if (auth()->user()->name == 'Admin') {
            // return redirect()->route('admin.dashboard')->withSuccess('You have Successfully loggedin');
            // } else {
            //     return redirect()->route('mentor.dashboard')->withSuccess('You have Successfully loggedin');
            // }
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
        $credentials = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        if(!($request->token == "Null")) 
        {
           return redirect()->route('schedule-call', [$request->mentor_id])->withSuccess('You have Successfully loggedin'); 
        }
        else {
            if (Auth::attempt($credentials)) {

               $request->session()->regenerate();
                   
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 3
        ]);

        UserMeta::create([
            'user_id' =>  $user['id'],
            'company' => $data['company_name'],
            'designation' => $data['designation'],
            'expertise' => json_encode($data['expert']),
            'social_linked_in' => $data['linked_in']
        ]);
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
}
