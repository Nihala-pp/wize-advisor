<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    // use SendsPasswordResetEmails;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showForgetPasswordForm()
    {
        return view('auth.passwords.email');
    }

    public function forgotPasswordEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function passwordReset(string $token)
    {
        return view('auth.passwords.reset', ['token' => $token]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}

    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // public function submitForgetPasswordForm(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|exists:users',
    //     ]);

    //     $token = Str::random(64);

    //     DB::table('password_resets')->insert([
    //         'email' => $request->email,
    //         'token' => $token,
    //         'created_at' => Carbon::now()
    //     ]);

    //     Mail::send('email.forgetPassword', ['token' => $token], function ($message) use ($request) {
    //         $message->to($request->email);
    //         $message->subject('Reset Password');
    //     });

    //     return back()->with('message', 'We have e-mailed your password reset link!');
    // }
    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // public function showResetPasswordForm($token)
    // {
    //     return view('auth.forgetPasswordLink', ['token' => $token]);
    // }

    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // public function submitResetPasswordForm(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|exists:users',
    //         'password' => 'required|string|min:6|confirmed',
    //         'password_confirmation' => 'required'
    //     ])

    //     $updatePassword = DB::table('password_resets')
    //         ->where([
    //             'email' => $request->email,
    //             'token' => $request->token
    //         ])
    //         ->first();

    //     if (!$updatePassword) {
    //         return back()->withInput()->with('error', 'Invalid token!');
    //     }

    //     $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

    //     DB::table('password_resets')->where(['email' => $request->email])->delete();

    //     return redirect('/login')->with('message', 'Your password has been changed!');
    // }