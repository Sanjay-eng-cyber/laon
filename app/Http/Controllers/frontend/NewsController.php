<?php

namespace App\Http\Controllers\frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        $news = Post::where('type', 'news')->where('published', 1)->latest()->paginate(10);
        return view('frontend.news.index', compact('news'));
    }

    public function show($slug)
    {
        $news = Post::where('slug', $slug)->where('published', 1)->firstOrFail();
        $relatedNews = Post::where([
            ['service_id', $news->service_id],
            ['type', 'news'],
            ['published', 1],
            ['id', '!=', $news->id]
        ])->limit(5)->latest()->get();
        return view('frontend.news.show', compact('news', 'relatedNews'));
    }
}
