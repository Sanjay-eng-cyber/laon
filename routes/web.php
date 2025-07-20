<?php

use Illuminate\Support\Facades\Route;

Route::domain(config('app.web_domain'))->group(
    function () {
        Route::get('/', function () {
            return view('index');
        });
        Route::get('loans', function () {
            return view('frontend/loans/index');
        })->name('loans');
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
