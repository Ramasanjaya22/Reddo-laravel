<?php

use Illuminate\Support\Facades\Route;

// front ( landing )
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\PostController;

// member ( dashboard )
use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\LeaderboardController;
use App\Http\Controllers\Dashboard\BooksController;
use App\Http\Controllers\Dashboard\ReminderController;
use App\Http\Controllers\Dashboard\ProfileController;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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

Route::resource('/', LandingController::class);
//post
Route::get('posts', [PostController::class, 'index'])->name('posts.landing');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');



Route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth:sanctum', 'verified']], function () {



    // dashboard
    Route::resource('dashboard', MemberController::class);

    // leaderboard
    Route::resource('leaderboard', LeaderboardController::class);

    // book collections
    Route::resource('books', BooksController::class);

    // reminder
    Route::resource('reminder', ReminderController::class);
    Route::get('create_reminder', [ReminderController::class, 'create'])->name('create.reminder');

    // Route::get('accept/order/{id}', [MyOrderController::class, 'accepted'])->name('accept.order');
    // Route::get('reject/order/{id}', [MyOrderController::class, 'rejected'])->name('reject.order');
    // Route::resource('order', MyOrderController::class);

    // profile
    Route::get('delete_photo', [ProfileController::class, 'delete'])->name('delete.photo.profile');
    Route::resource('profile', ProfileController::class);
});

Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);
