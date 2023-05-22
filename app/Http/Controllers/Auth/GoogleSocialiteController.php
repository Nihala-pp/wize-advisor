<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\User;
use App\Notifications\CustomNotification;
use Illuminate\Http\Request;

class GoogleSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect()->route('admin.dashboard')->withSuccess('You have Successfully loggedin');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'google',
                    'password' => encrypt('my-google'),
                    'role_id' => 3
                ]);

                Auth::login($newUser);

                // $messages["data"] = "New user {$newUser['name']} has registered himself.’";

                // $newUser->notify(new CustomNotification($messages));

                return redirect()->route('admin.dashboard')->withSuccess('You have Successfully loggedin');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
