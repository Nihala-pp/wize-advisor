<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use Exception;
use App\Models\User;
use App\Notifications\CustomNotification;

class LinkedinSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('linkedin')->user();

            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect()->route('admin.dashboard')->withSuccess('You have Successfully loggedin');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'linkedin',
                    'password' => encrypt('my-linkedin'),
                    'role_id' => 3
                ]);

                Auth::login($newUser);

                // $messages["data"] = "New user {$newUser['name']} has registered himself.’";

                // $newUser->notify(new CustomNotification($messages));

                return redirect()->route('admin.dashboard')->withSuccess('You have Successfully loggedin');

                // return redirect('/home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
