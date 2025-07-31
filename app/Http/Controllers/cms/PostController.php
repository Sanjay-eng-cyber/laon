<?php

namespace App\Http\Controllers\cms;

use App\Models\Post;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index($service_id)
    {
        // dd($service_id);
        $service = Service::findOrFail($service_id);
        // dd($service->id);
        $blogs = $service->posts()
            ->where('type', 'blog')
            ->paginate(10, ['*'], 'blog_page');

        $news = $service->posts()
            ->where('type', 'news')
            ->paginate(10, ['*'], 'news_page');
        return view('backend.blogs.index', compact('blogs', 'news', 'service'));
    }

    public function show($service_id, $post_id)
    {
        $service = Service::findOrFail($service_id);
        $post = Post::where('service_id', $service->id)->where('id', $post_id)->firstOrFail();
        return view('backend.blogs.show', compact('post'));
    }

    public function create($service_id)
    {
        $service = Service::findOrFail($service_id);
        return view('backend.blogs.create', compact('service'));
    }

    public function store(Request $request, $service_id)
    {
        $service = Service::findOrFail($service_id);

        $request->validate([
            'title' => 'required|string|max:190|min:3',
            'type' => 'required|string|in:blog,news',
            'image' => 'required|mimes:jpeg,png,jpg|max:1024',
            'body' => 'required|string|max:30000|min:3',
        ]);

        $post = new Post();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = storage_path('app/public/images/' . $request->type . '/');
            // dd($destinationPath);
            $filename = saveFile($file, $destinationPath);
            $post->image = $filename;
        }
        $post->service_id = $service->id;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->body = $request->body;
        $post->type = $request->type;
        $post->published = $request->published;
        if ($post->save()) {
            return redirect()->route('cms.post.index', $service->id)->with(
                [
                    "message" => ucwords($post->type) . " Added Successfully",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function edit($service_id, $post_id)
    {
        $service = Service::findOrFail($service_id);
        $post = Post::where('service_id', $service->id)->where('id', $post_id)->firstOrFail();
        return view('backend.blogs.edit', compact('service', 'post'));
    }

    public function update(Request $request, $service_id, $post_id)
    {
        $service = Service::findOrFail($service_id);

        $request->validate([
            'title' => 'required|string|max:190|min:3',
            'type' => 'required|string|in:blog,news',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
            'body' => 'required|string|max:30000|min:3',
        ]);

        $post = Post::where('service_id', $service->id)->where('id', $post_id)->firstOrFail();
        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists('images/' . $post->type . '/' . $post->image)) {
                Storage::disk('public')->delete('images/' . $post->type . '/' . $post->image);
            }

            $file = $request->file('image');
            $destinationPath = storage_path('app/public/images/' . $request->type . '/');
            // dd($destinationPath);
            $filename = saveFile($file, $destinationPath);
            $post->image = $filename;
        }
        $post->service_id = $service->id;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->body = $request->body;
        $post->type = $request->type;
        $post->published = $request->published;
        if ($post->save()) {
            return redirect()->route('cms.post.index', $service->id)->with(
                [
                    "message" => ucwords($post->type) . " Updated Successfully",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function delete($service_id, $post_id)
    {
        $service = Service::findOrFail($service_id);
        $post = Post::where('service_id', $service->id)->where('id', $post_id)->firstOrFail();
        optional(Storage::disk('public')->delete('images/' . $post->type . '/' . $post->image));
        if ($post->delete()) {
            return redirect()->route('cms.post.index', $service->id)->with(
                [
                    "message" => ucwords($post->type) . " Deleted Successfully",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.post.index', $service->id)->with(
                [
                    "message" => "Something Went Wrong",
                    "alert-type" => "error"
                ]
            );
        }
    }
}
