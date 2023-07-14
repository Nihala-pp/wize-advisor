<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LinkedinSocialiteController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\PasswordReset;


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
// Route::get('dashboard', [AuthController::class, 'dashblogoutoard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('auth/linkedin', [LinkedinSocialiteController::class, 'redirectToLinkedin'])->name('auth.linkedin');
Route::get('callback/linkedin', [LinkedinSocialiteController::class, 'handleCallback'])->name('callback.linkedin');

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback'])->name('callback.google');

Route::get('/forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('/forgot-password-email', [ForgotPasswordController::class, 'forgotPasswordEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'passwordReset'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'updatePassword'])->name('password.update');

// Route::get('/sign-up', 'signup')->name('sign-up');

// Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
// Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
// Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
// Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('profile/{id?}', [HomeController::class, 'profile'])->name('profile');
Route::get('browseMentor/{expertise?}/{filter?}', [HomeController::class, 'browseMentor'])->name('browseMentor');
Route::get('be-a-mentor', [HomeController::class, 'addMentor'])->name('be-a-mentor');
Route::post('addMentorRequest', [HomeController::class, 'addMentorRequest'])->name('addMentorRequest');
Route::get('schedule-call/{id?}', [HomeController::class, 'scheduleCall'])->name('schedule-call');
Route::post('addScheduleRequest', [HomeController::class, 'addScheduleRequest'])->name('addScheduleRequest');
Route::post('getTimeAvailability', [HomeController::class, 'getTimeAvailability'])->name('getTimeAvailability');
Route::get('success', [HomeController::class, 'success'])->name('success');

Route::get('send-schedule-request-mail', [HomeController::class, 'sendScheduleRequestMail']);
Route::get('send-schedule-request-user-mail', [HomeController::class, 'sendScheduleRequestUserMail']);

Route::controller(AdminController::class)
    ->as('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', 'index')->name('dashboard');
        Route::get('/user_profiles', 'user_profiles')->name('user_profiles.index');
        Route::get('/add_user/{id?}', 'add_user')->name('users.add');
        Route::post('/create_user', 'create_user')->name('users.create');
        Route::get('/view_profile/{id?}', 'view_profile')->name('user_profiles.view_profile');
        Route::get('/mentors', 'list_mentors')->name('mentors.list_mentors');
        Route::post('/save_mentors', 'save_mentors')->name('mentors.save');
        Route::get('/add_mentors/{id?}', 'add_mentors')->name('mentors.add');
        Route::get('/mentors_profile/{id?}', 'mentors_profile')->name('mentors.mentors_profile');
        Route::get('/reviews/{id?}', 'reviews')->name('mentors.reviews');
        Route::get('/experience/{id?}', 'experience')->name('mentors.experience');
        Route::get('/expertise/{id?}', 'expertise')->name('mentors.expertise');
        Route::get('/scheduled-calls', 'scheduledCalls')->name('mentors.scheduled-calls');
        Route::post('/mark-as-read', 'markNotification')->name('markNotification');
        Route::post('/addTodoList', 'addTodoList')->name('addTodoList');
        Route::get('/update_todo_status/{id}', 'update_todo_status')->name('update_todo_status');
        Route::get('/delete_todo_status/{id}', 'delete_todo_status')->name('delete_todo_status');
        Route::get('/viewTask', 'viewTask')->name('viewTask');
        Route::get('/settings', 'settings')->name('settings');
        Route::post('/settings/update', 'updateSettings')->name('settings.update');
        Route::get('/login_history', 'login_history')->name('login_history');
        Route::get('/logs', 'logs')->name('logs');
        Route::get('/sign-in', 'signin')->name('mentors.sign-in');
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
        Route::get('/dashboard/profile/{id?}', 'profile')->name('dashboard.profile');
        Route::get('/dashboard/reviews', 'reviews')->name('dashboard.reviews');
        Route::get('/dashboard/experience', 'experience')->name('dashboard.experience');
        Route::get('/dashboard/expertise', 'expertise')->name('dashboard.expertise');
        Route::get('/dashboard/availability', 'availability')->name('dashboard.availability');
        Route::get('/update_status/{id?}', 'update_status')->name('update_status');
        Route::get('/reject_call/{id?}', 'reject_call')->name('reject_call');
        Route::get('/add_mentors/{id?}', 'add_mentors')->name('add');
        Route::post('/account_status', 'account_status')->name('account_status');
        Route::post('/delete', 'delete_account')->name('delete_account');
        Route::post('/save_mentors', 'save_mentors')->name('save');
        Route::post('/save_schedule', 'save_schedule')->name('schedule.save');
        // Route::get('/sign-in', 'signin')->name('sign-in');
    });