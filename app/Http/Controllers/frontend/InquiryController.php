<?php

namespace App\Http\Controllers\frontend;

use App\Models\City;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Mail\InquiryMail;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $services = Service::pluck('id')->toArray();
        $cities = City::pluck('id')->toArray();
        $request->validate([
            'name' => 'required|min:5|max:180',
            'city_id' => ['required', Rule::in($cities)],
            'service_id' => ['required', Rule::in($services)],
            'email' => 'required|min:5|max:60|email:rfc,dns',
            'phone' => 'required|digits:10|regex:/^[6-9]\d{9}$/',
            'date' => 'required|date',
        ]);

        $inquiry = new Inquiry();
        $inquiry->name = $request->name;
        $inquiry->city_id = $request->city_id;
        $inquiry->service_id = $request->service_id;
        $inquiry->email = $request->email;
        $inquiry->phone = $request->phone;
        $inquiry->date = $request->date;
        if ($inquiry->save()) {
            Mail::to(config('app.mail_to_address'))->send(new InquiryMail($inquiry));
            return redirect()->back()->with([
                "message" => "Message Sent Successfully",
                "alert-type" => "success"
            ]);
        }
    }
}
