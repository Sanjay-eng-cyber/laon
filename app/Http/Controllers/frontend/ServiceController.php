<?php

namespace App\Http\Controllers\frontend;

use App\Models\City;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('type', 'loan')->latest()->paginate(10);
        return view('frontend.loans.index', compact('services'));
    }

    public function show($service_slug, $city_slug = null)
    {
        $service = Service::where('type', 'loan')->where('slug', $service_slug)->firstOrFail();
        // dd($city_slug);
        $city = $city_slug
            ? City::where('slug', $city_slug)->firstOrFail()
            : null;
        // dd($city);
        $services = Service::where('type', 'loan')->get();

        return view('frontend.loans.' . $service->slug, compact('service', 'city', 'services'));
    }
}
