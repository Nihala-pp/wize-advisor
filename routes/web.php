<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::controller(AdminController::class)
    ->as('admin.')
    ->prefix('listProfiles')
    ->group(function () {
        Route::get('/', 'index')->name('user_profiles.index');
        Route::get('/view_profile', 'view_profile')->name('user_profiles.view_profile');
        Route::get('/mentors', 'list_mentors')->name('mentors.list_mentors');
        Route::get('/mentors_profile', 'mentors_profile')->name('mentors.mentors_profile');
        Route::get('/reviews', 'reviews')->name('mentors.reviews');
        Route::get('/experience', 'experience')->name('mentors.experience');
        Route::get('/expertise', 'expertise')->name('mentors.expertise');
        Route::get('/scheduled-calls', 'scheduled-calls')->name('mentors.scheduled-calls');
        // Route::get('/create', 'create')->name('create');
        // Route::get('/edit/{id}', 'edit')->name('edit');
        // Route::post('/store', 'store')->name('store');
        // Route::get('/print/{id}', 'print')->name('print');
        // Route::get('/show/{id}', 'show')->name('show');
    });
