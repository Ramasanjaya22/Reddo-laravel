<?php

use Illuminate\Support\Facades\Route;

// front ( landing )
use App\Http\Controllers\Landing\LandingController;

// member ( dashboard )
use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\LeaderboardController;
use App\Http\Controllers\Dashboard\BooksController;
use App\Http\Controllers\Dashboard\ReminderController;
use App\Http\Controllers\Dashboard\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('about', [LandingController::class, 'about'])->name('about.landing');
Route::get('forum', [LandingController::class, 'forum'])->name('forum.landing');
Route::resource('/', LandingController::class);

Route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth:sanctum', 'verified']], function() {

    // dashboard
    Route::resource('dashboard', MemberController::class);

    // leaderboard
    Route::resource('leaderboard', LeaderboardController::class);
    Route::controller(LeaderboardController::class)->group(function() {
        Route::get('/leaderboard/get_crown/{rank}', 'getCrown')->name('get.crown');
    });

    // book collections
    Route::resource('books', BooksController::class);

    // reminder
    Route::resource('reminder', ReminderController::class);
    // Route::get('accept/order/{id}', [MyOrderController::class, 'accepted'])->name('accept.order');
    // Route::get('reject/order/{id}', [MyOrderController::class, 'rejected'])->name('reject.order');
    // Route::resource('order', MyOrderController::class);

    // profile
    Route::get('delete_photo', [ProfileController::class, 'delete'])->name('delete.photo.profile');
    Route::resource('profile', ProfileController::class);

});
