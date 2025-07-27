<?php

use App\Http\Controllers\frontend\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\InquiryController;
use App\Http\Controllers\frontend\ServiceController;

Route::domain(config('app.web_domain'))->group(
    function () {
        // Route::get('/', function () {
        //     return view('index');
        // });
        Route::get('/', [HomeController::class, 'index'])->name('dashboard');
        Route::get('services', [ServiceController::class, 'index'])->name('services.index');
        Route::get('service/{service_slug}/{city_slug?}', [ServiceController::class, 'show'])->name('services.show');
        Route::post('inquiry/store', [InquiryController::class, 'store'])->name('inquiry.store');
        Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
        Route::get('blog/show', [BlogController::class, 'show'])->name('blog.show');
        // Route::get('loans', function () {
        //     return view('frontend/loans/index');
        // })->name('loans');
        Route::get('service/personal-loan', function () {
            return view('frontend/loans/personal-loan');
        });
        Route::get('service/home-loan', function () {
            return view('frontend/loans/home-loan');
        });
        Route::get('service/gold-loan', function () {
            return view('frontend/loans/gold-loan');
        });
        Route::get('service/business-loan', function () {
            return view('frontend/loans/business-loan');
        });
        Route::get('service/share-loan', function () {
            return view('frontend/loans/share-loan');
        });
    }
);
