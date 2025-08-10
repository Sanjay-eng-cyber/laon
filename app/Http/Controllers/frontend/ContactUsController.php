<?php

namespace App\Http\Controllers\frontend;

use App\Models\City;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function index(){
        $services = Service::get();
        $cities = City::get();
        return view('frontend.contact-us',compact('services','cities'));
    }
}
