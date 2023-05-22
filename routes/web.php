<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LinkedinSocialiteController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('admin/login', function () {
//     return view('auth.login');
// });

// Route::get('/mentor', function () {
//     return view('mentors.index');
// });

// Route::get('/user', function () {
//     return view('users.index');
// })

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
// Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('auth/linkedin', [LinkedinSocialiteController::class, 'redirectToLinkedin'])->name('auth.linkedin');
Route::get('callback/linkedin', [LinkedinSocialiteController::class, 'handleCallback'])->name('callback.linkedin');

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback'])->name('callback.google');

Route::get('/forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('/forgot-password-email', [ForgotPasswordController::class, 'forgotPasswordEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'passwordReset'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'updatePassword'])->name('password.update');

// Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
// Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
// Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
// Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::controller(AdminController::class)
    ->as('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', 'index')->name('dashboard');
        Route::get('/user_profiles', 'user_profiles')->name('user_profiles.index');
        Route::get('/view_profile', 'view_profile')->name('user_profiles.view_profile');
        Route::get('/mentors', 'list_mentors')->name('mentors.list_mentors');
        Route::get('/mentors_profile', 'mentors_profile')->name('mentors.mentors_profile');
        Route::get('/reviews', 'reviews')->name('mentors.reviews');
        Route::get('/experience', 'experience')->name('mentors.experience');
        Route::get('/expertise', 'expertise')->name('mentors.expertise');
        Route::get('/scheduled-calls', 'scheduledCalls')->name('mentors.scheduled-calls');
        Route::post('/mark-as-read', 'markNotification')->name('markNotification');
        Route::get('/sign-in', 'signin')->name('mentors.sign-in');
        Route::get('/sign-up', 'signup')->name('mentors.sign-up');
        // Route::get('/create', 'create')->name('create');
        // Route::get('/edit/{id}', 'edit')->name('edit');
        // Route::post('/store', 'store')->name('store');
        // Route::get('/print/{id}', 'print')->name('print');
        // Route::get('/show/{id}', 'show')->name('show');
    });

Route::controller(MentorController::class)
    ->as('mentor.')
    ->prefix('mentor')
    ->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/dashboard/my_sessions', 'my_sessions')->name('dashboard.my_sessions');
        Route::get('/dashboard/profile', 'profile')->name('dashboard.profile');
        Route::get('/dashboard/reviews', 'reviews')->name('dashboard.reviews');
        Route::get('/dashboard/experience', 'experience')->name('dashboard.experience');
        Route::get('/dashboard/expertise', 'expertise')->name('dashboard.expertise');
        Route::get('/dashboard/availability', 'availability')->name('dashboard.availability');
        // Route::get('/sign-in', 'signin')->name('sign-in');
    });
