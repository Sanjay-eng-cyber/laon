<?php

namespace App\Http\Controllers\frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Post::where('type', 'blog')->where('published', 1)->latest()->paginate(10);
        return view('frontend.blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Post::where('slug', $slug)->where('published', 1)->firstOrFail();
        $relatedBlogs = Post::where([
            ['service_id', $blog->service_id],
            ['type', 'blog'],
            ['published', 1],
            ['id', '!=', $blog->id]
        ])->limit(5)->latest()->get();
        return view('frontend.blogs.show', compact('blog', 'relatedBlogs'));
    }
}
