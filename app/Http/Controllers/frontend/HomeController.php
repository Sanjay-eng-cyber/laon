<?php

namespace App\Http\Controllers\frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('type', 'loan')->limit(3)->get();
        return view('index',compact('services'));
    }
}
