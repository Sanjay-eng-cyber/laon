<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cms\PostController;
use App\Http\Controllers\cms\InquiryController;
use App\Http\Controllers\frontend\UserAdminChatController;


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

    // City Controllers
    Route::get('/cities', 'App\Http\Controllers\cms\CityController@index')->name('cms.cities.index');
    Route::get('/city/show/{id}', 'App\Http\Controllers\cms\CityController@show')->name('cms.cities.show');
    Route::get('/city/create', 'App\Http\Controllers\cms\CityController@create')->name("cms.cities.create");
    Route::post('/city/store', 'App\Http\Controllers\cms\CityController@store')->name("cms.cities.store");
    Route::get('/city/delete/{id}', 'App\Http\Controllers\cms\CityController@delete')->name("cms.cities.delete");
    Route::get('/city/edit/{id}', 'App\Http\Controllers\cms\CityController@edit')->name("cms.cities.edit");
    Route::post('/city/update/{id}', 'App\Http\Controllers\cms\CityController@update')->name("cms.cities.update");

    // Service Controllers
    Route::get('/services', 'App\Http\Controllers\cms\ServiceController@index')->name('cms.services.index');
    Route::get('/service/show/{id}', 'App\Http\Controllers\cms\ServiceController@show')->name('cms.services.show');
    Route::get('/service/create', 'App\Http\Controllers\cms\ServiceController@create')->name("cms.services.create");
    Route::post('/service/store', 'App\Http\Controllers\cms\ServiceController@store')->name("cms.services.store");
    Route::get('/service/delete/{id}', 'App\Http\Controllers\cms\ServiceController@delete')->name("cms.services.delete");
    Route::get('/service/edit/{id}', 'App\Http\Controllers\cms\ServiceController@edit')->name("cms.services.edit");
    Route::post('/service/update/{id}', 'App\Http\Controllers\cms\ServiceController@update')->name("cms.services.update");

    // post controllers
    Route::get('posts/{service_id}', [PostController::class, 'index'])->name('cms.post.index');
    Route::get('post/{service_id}/show/{post_id}', [PostController::class, 'show'])->name('cms.post.show');
    Route::get('post/create/{service_id}', [PostController::class, 'create'])->name('cms.post.create');
    Route::post('post/store/{service_id}', [PostController::class, 'store'])->name('cms.post.store');
    Route::get('post/{service_id}/edit/{post_id}', [PostController::class, 'edit'])->name('cms.post.edit');
    Route::post('post/{service_id}/update/{post_id}', [PostController::class, 'update'])->name('cms.post.update');
    Route::get('post/{service_id}/delete/{post_id}', [PostController::class, 'delete'])->name('cms.post.delete');

    Route::get('chats', [UserAdminChatController::class, 'index'])->name('cms.chats');
    Route::post('chat/store', [UserAdminChatController::class, 'messageSend'])->name('cms.chat.store');

    Route::get('inquiry', [InquiryController::class, 'index'])->name('cms.inquiry.index');
    Route::get('inquiry/{id}', [InquiryController::class, 'show'])->name('cms.inquiry.show');
  });
});
