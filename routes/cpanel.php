<?php

use Illuminate\Support\Facades\Route;


Route::domain(config('app.cms_domain'))->group(function () {


    require __DIR__ . '/auth.php';

    Route::get("/login", 'App\Http\Controllers\cms\LoginController@loginShow')->name('cms.login');
    Route::post("/login", 'App\Http\Controllers\cms\LoginController@login')->name('cms.login.submit');

    Route::get('/forgot-password', 'App\Http\Controllers\cms\ForgotPasswordController@index')->name('cms.forgotPassword.index');

    Route::group(['middleware' => 'auth:admin'], function () {

        Route::get('/change-password', 'App\Http\Controllers\cms\ChangePasswordController@changePassword')->name('cms.changePassword.index');
        Route::post('/change-password/{id}', 'App\Http\Controllers\cms\ChangePasswordController@passwordChange')->name('cms.password.submit');

        Route::get('/logout', 'App\Http\Controllers\cms\LoginController@logout')->name("cms.logout");

        Route::get('/', 'App\Http\Controllers\cms\StatisticsController@index')->name("cms.statistics.index");

        // Cities Controller
        Route::get('/cities', 'App\Http\Controllers\cms\CityController@index')->name('cms.cities.index');
        Route::get('/city/show/{id}', 'App\Http\Controllers\cms\CityController@show')->name('cms.cities.show');
        Route::get('/city/create', 'App\Http\Controllers\cms\CityController@create')->name("cms.cities.create");
        Route::post('/city/store', 'App\Http\Controllers\cms\CityController@store')->name("cms.cities.store");
        Route::get('/city/delete/{id}', 'App\Http\Controllers\cms\CityController@delete')->name("cms.cities.delete");
        Route::get('/city/edit/{id}', 'App\Http\Controllers\cms\CityController@edit')->name("cms.cities.edit");
        Route::post('/city/update/{id}', 'App\Http\Controllers\cms\CityController@update')->name("cms.cities.update");
    });
});
