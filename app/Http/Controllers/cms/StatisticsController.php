<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Message;
use App\Models\Service;

class StatisticsController extends Controller
{
    public function index()
    {
        $cities = City::count();
        $messages = Message::count();
        $services = Service::count();
        return view('backend.statistics.index', compact('cities', 'messages', 'services'));
    }
}
