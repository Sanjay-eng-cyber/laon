<?php

namespace App\Http\Controllers\frontend;

use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('type', 'loan')->latest()->limit(3)->get();
        $news = Post::where('type', 'news')->latest()->limit(3)->get();
        return view('index', compact('services', 'news'));
    }
}
