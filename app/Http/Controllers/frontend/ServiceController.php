<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('type', 'loan')->latest()->paginate(10);
        return view('frontend.loans.index', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('type', 'loan')->where('slug', $slug)->firstOrFail();
        return view('frontend.loans.' . $service->slug, compact('service'));
    }
}
