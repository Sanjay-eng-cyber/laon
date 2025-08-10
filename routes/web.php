<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\AuthController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LoanCalculator;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\InquiryController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\UserAdminChatController;

Route::domain(config('app.web_domain'))->group(
    function () {
        Route::get('/', [HomeController::class, 'index'])->name('dashboard');
        Route::get('services', [ServiceController::class, 'index'])->name('services.index');
        Route::get('service/{service_slug}/{city_slug?}', [ServiceController::class, 'show'])->name('services.show');
        Route::post('inquiry/store', [InquiryController::class, 'store'])->name('inquiry.store');
        Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
        Route::get('blog/show/{slug}', [BlogController::class, 'show'])->name('blog.show');

        Route::get('news', [NewsController::class, 'index'])->name('news.index');
        Route::get('news/show/{slug}', [NewsController::class, 'show'])->name('news.show');

        Route::get('login', [AuthController::class, 'loginShow'])->name('login');
        Route::post('login/store', [AuthController::class, 'login'])->name('login.store');
        Route::get('sign-up', [AuthController::class, 'userRegisterShow'])->name('sign-up');
        Route::post('sign-up/store', [AuthController::class, 'signUp'])->name('sign-up.store');

        Route::get('loan-calculator', [LoanCalculator::class, 'index'])->name('loan-calculator');

        Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact-us');

        Route::get('teams', [TeamController::class, 'index'])->name('team.index');

        Route::group(['middleware' => 'auth:web'], function () {
            Route::post('chat/store', [UserAdminChatController::class, 'messageSend'])->name('chat.store');
            Route::get('logout', [AuthController::class, 'logout'])->name('frontend.logout');
        });
    }
);
