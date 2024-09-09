<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CallFeedbacksMailController;
use App\Http\Controllers\CallReminderMentorController;
use App\Http\Controllers\CallReminderUserController;
use App\Http\Controllers\Cron;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\ToDOController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LinkedinSocialiteController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\weeklySlotUpdateController;
use App\Http\Controllers\CompletedCallsMailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TestController;
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

Route::get('login/{token?}/{id?}/{name?}', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration/{token?}/{id?}', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
// Route::get('dashboard', [AuthController::class, 'dashblogoutoard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('auth/linkedin', [LinkedinSocialiteController::class, 'redirectToLinkedin'])->name('auth.linkedin');
Route::get('callback/linkedin', [LinkedinSocialiteController::class, 'handleCallback'])->name('callback.linkedin');
Route::get('personal-info/{id?}', [AuthController::class, 'personalInfo'])->name('user.personalInfo');
Route::post('save-personal-info', [AuthController::class, 'savePersonalInfo'])->name('update-details.save');

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback'])->name('callback.google');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('/forgot-password-email', [ForgotPasswordController::class, 'forgotPasswordEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'passwordReset'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'updatePassword'])->name('password.update');
Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);
Route::get('/reload-captcha', [payWithpaypal::class, 'reloadCaptcha']);

// Route::get('/sign-up', 'signup')->name('sign-up');

// Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
// Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
// Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
// Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('test', [HomeController::class, 'test'])->name('test');
Route::get('mentors/{id?}/{name?}', [HomeController::class, 'profile'])->name('profile');
Route::get('BrowseMentors/{expertise_name?}', [HomeController::class, 'browseMentor'])->name('browseMentor');
Route::get('browseMentor/filters', [HomeController::class, 'filters'])->name('browseMentor.filters');
Route::get('be-a-mentor', [HomeController::class, 'addMentor'])->name('be-a-mentor');
Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::post('addMentorRequest', [HomeController::class, 'addMentorRequest'])->name('addMentorRequest');
Route::get('schedule-call/{id?}/{call_id?}/{name?}', [HomeController::class, 'scheduleCall'])->name('schedule-call');
Route::post('token', [HomeController::class, 'token'])->name('token');
Route::any('addScheduleRequest', [HomeController::class, 'addScheduleRequest'])->name('addScheduleRequest')->middleware('auth');
Route::post('getTimeAvailability', [HomeController::class, 'getTimeAvailability'])->name('getTimeAvailability');
Route::get('getDateAvailability', [HomeController::class, 'getDateAvailability'])->name('getDateAvailability');
Route::get('success/{id?}', [HomeController::class, 'success'])->name('success');
Route::get('terms-conditions', [HomeController::class, 'termsConditions'])->name('termsConditions');
Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('community-guidelines', [HomeController::class, 'communityGuidelines'])->name('community-guidelines');
Route::get('community-posts', [HomeController::class, 'communityPosts'])->name('community-posts');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('libraries', [HomeController::class, 'libraries'])->name('libraries');
Route::post('contact-us/save', [HomeController::class, 'saveContact'])->name('contact.save');
// Route::get('blogs/{id?}', [HomeController::class, 'blogDetailPage'])->name('blog-detail');
Route::get('how-it-works', [HomeController::class, 'howitWorks'])->name('howitWorks');
Route::post('question', [HomeController::class, 'ask_question'])->name('askQuestion');
Route::post('subscribe',[HomeController::class, 'subscriptionList'])->name('subscribe');

Route::get('send-schedule-request-mail', [HomeController::class, 'sendScheduleRequestMail']);
Route::get('send-schedule-request-user-mail', [HomeController::class, 'sendScheduleRequestUserMail']);

Route::get('cron', [Cron::class, 'index'])->name('index');
Route::get('weekly-email', [Cron::class, 'weeklySlotUpdate'])->name('weeklySlotUpdate');

Route::get('/delayedtask',[CallReminderMentorController::class, 'delayedtask']);
Route::get('/userReminderMail',[CallReminderUserController::class, 'userReminderMail']);
Route::get('/completedcalls',[CompletedCallsMailController::class, 'index']);
Route::get('/feedbackmail',[CallFeedbacksMailController::class, 'index']);
Route::get('/slotupdateweekly',[weeklySlotUpdateController::class, 'index']);
Route::get('/to-do-task',[ToDOController::class, 'index']);

// Route::get('blog-test', [HomeController::class, 'blogSample'])->name('blogSample');
Route::get('categories/{id?}/{name?}', [HomeController::class, 'blogCategories'])->name('blogCategories');
Route::get('blogs/{id?}/{name?}', [HomeController::class, 'blogDetail'])->name('blogDetail');

Route::post('/coupon/redeem',[PaymentController::class, 'redeem'])->name('coupon.redeem');
Route::post('/payment/paypal/createTransaction',[PaymentController::class, 'payWithpaypal']);
Route::post('/payment/paypal/capture/{orderid}',[PaymentController::class, 'getPaymentStatus']);
Route::post('/cancel/{order_no}', 'PaymentController@orderCancel');
Route::post('/order/cancel',[PaymentController::class, 'cancel_order'])->name('order.cancel');

//stripe payment gateway

Route::post('/checkout',[PaymentController::class, 'checkout'])->name('checkout');
Route::get('/success-test',[PaymentController::class, 'success'])->name('success-test');
Route::get('/cancel',[PaymentController::class, 'cancel'])->name('cancel');



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
        Route::get('/scheduled-calls/new-schedule/{date}/{id}', 'newschedule')->name('mentors.scheduled-calls.new-schedule');
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
        Route::get('/expertise/list', 'expertise')->name('mentors.expertise.list');
        Route::get('/expertise/add', 'addExpertise')->name('mentors.expertise.add');
        Route::get('/expertise/edit/{id?}', 'editExpertise')->name('mentors.expertise.edit');
        Route::get('/expertise/delete', 'deleteExpertise')->name('mentors.expertise.delete');
        Route::post('/expertise/save', 'saveExpertise')->name('mentors.expertise.save');
        Route::get('/blogs', 'blogs')->name('mentors.blogs');
        Route::post('/blogs/save', 'saveBlogs')->name('mentors.blogs.save');
        Route::get('/blogs/edit/{id?}', 'editBlogs')->name('mentors.blogs.edit');
        Route::get('/blogs/delete/{id?}', 'deleteBlogs')->name('mentors.blogs.delete');
        Route::get('/vouchers', 'vouchers')->name('mentors.vouchers');
        Route::post('/vouchers/save', 'saveVouchers')->name('mentors.vouchers.save');
        Route::get('/vouchers/edit', 'editVouchers')->name('mentors.vouchers.edit');
        Route::get('/vouchers/delete/{id?}', 'deleteVouchers')->name('mentors.vouchers.delete');
        Route::get('/reviews', 'reviews')->name('mentors.review');
        Route::post('/reviews/approve', 'approveReviews')->name('mentors.review.approve');
        Route::get('/reviews/reject/{id?}', 'deleteReviews')->name('mentors.review.reject');
        Route::get('/mentors/resources', 'resources')->name('mentors.resources');
        Route::get('/mentors/events', 'events')->name('mentors.events');
        // Route::get('/sign-in', 'signin')->name('mentors.sign-in');
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
        Route::get('/dashboard/blogs', 'expertise')->name('dashboard.expertise');
        Route::get('/dashboard/availability', 'availability')->name('dashboard.availability');
        Route::get('/dashboard/availability/edit', 'editAvailability')->name('dashboard.availability.edit');
        Route::get('/dashboard/availability/delete', 'deleteAvailability')->name('dashboard.availability.delete');
        Route::get('/update_status/{id?}', 'update_status')->name('update_status');
        Route::get('/reject_call/{id?}', 'reject_call')->name('reject_call');
        Route::get('/add_mentors/{id?}', 'add_mentors')->name('add');
        Route::post('/account_status', 'account_status')->name('account_status');
        Route::post('/delete', 'delete_account')->name('delete_account');
        Route::post('/save_mentors', 'save_mentors')->name('save');
        Route::post('/schedule/save', 'save_schedule')->name('schedule.save');
        Route::post('/schedule/edit', 'edit_schedule')->name('schedule.edit');
        Route::get('/zoom_api/test', 'test')->name('zoom_api.test');
        Route::get('/meeting/generate_token', 'generateAccessToken')->name('zoom_api.token');
        Route::get('/zoom_api/create_link', 'getZoomCallLink')->name('zoom_api.create_link');
        Route::get('/meeting/success', 'success')->name('meeting.success');
        Route::post('/blog/add', 'saveBlog')->name('blog.add');
        Route::post('/experience/save', 'saveExperience')->name('experience.save');
        Route::get('/experience/edit', 'editExperience')->name('experience.edit');
        Route::get('/experience/delete', 'deleteExperience')->name('experience.delete');
        Route::get('/markNotification', 'markNotification')->name('markNotification');
        // Route::get('/sign-in', 'signin')->name('sign-in');
    });

Route::controller(UserController::class)
    ->as('user.')
    ->prefix('user')
    ->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/review/{id?}', 'review')->name('review');
        Route::post('/review/save', 'saveReview')->name('review.save');
        Route::get('/schedule/update/{id?}', 'updateSchedule')->name('schedule.update');
        Route::post('/schedule/save', 'saveSchedule')->name('schedule.save');
        Route::get('/getTimeAvailability', 'getTimeAvailability')->name('schedule.getTimeAvailability');
        Route::get('/profile/{id?}', 'profile')->name('profile');
        Route::post('/save_users', 'save_users')->name('save');
        Route::get('/change-password', 'changePassword')->name('change-password');
        Route::post('/save-password', 'savePassword')->name('password.save');
        Route::get('/my-reviews', 'listReviews')->name('reviews.list');
        Route::get('/profileTest', 'profileTest')->name('profileTest');
        Route::get('/test', 'test')->name('test');
    });

   //***             Test Routes               ****///

// Route::get('home-test', [TestController::class, 'homeTest'])->name('home-test');
//    Route::get('contactus-test', [TestController::class, 'contactuspage'])->name('contact-test');