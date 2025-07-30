<?php

namespace App\Http\Controllers\cms;

use App\Models\City;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('backend.services.index', compact('services'));
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.services.show', compact('service'));
    }

    public function create()
    {
        $cities = City::get();
        return view('backend.services.create', compact('cities'));
    }

    public function store(Request $request)
    {
        $cities = City::pluck('id')->toArray();

        $request->validate([
            'name' => 'required|max:150|min:3|string|unique:services,name',
            'city_id' => 'nullable|array|max:20',
            'city_id.*' => ['required', Rule::in($cities)],
            'short_desc' => 'required|string|max:300|min:3',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
            'type' => 'required|string|min:3|max:20',
            'rate_of_interest' => 'nullable|numeric|between:3,20',
        ]);

        $service = new Service();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = storage_path('app/public/images/services/');
            $filename = saveFile($file, $destinationPath);
            $service->image = $filename;
        }
        $service->name = $request->name;
        $service->slug = Str::slug($request->name);
        $service->short_desc = $request->short_desc;
        $service->rate_of_interest = $request->rate_of_interest;
        $service->type = $request->type;
        if ($service->save()) {
            $service->cities()->sync($request->city_id);
            return redirect()->route('cms.services.index')->with(
                [
                    "message" => "Service Added Successfully",
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

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $cities = City::get();
        $citiesArr = $service->cities->pluck('id')->toArray();
        // dd($citiesArr);
        return view('backend.services.edit', compact('service', 'cities', 'citiesArr'));
    }

    public function update(Request $request, $id)
    {
        $cities = City::pluck('id')->toArray();

        $request->validate([
            'name' => 'required|max:150|min:3|string|unique:services,name,' . $id,
            'city_id' => 'nullable|array|max:20',
            'city_id.*' => ['required', Rule::in($cities)],
            'short_desc' => 'required|string|max:300|min:3',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
            'type' => 'required|string|min:3|max:20',
            'rate_of_interest' => 'nullable|numeric|between:3,20',
        ]);

        $service = Service::findOrFail($id);
        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists('images/services/' . $service->image)) {
                Storage::disk('public')->delete('images/services/' . $service->image);
            }
            $file = $request->file('image');
            $destinationPath = storage_path('app/public/images/services/');
            $filename = saveFile($file, $destinationPath);
            $service->image = $filename;
        }
        $service->name = $request->name;
        $service->slug = Str::slug($request->name);
        $service->short_desc = $request->short_desc;
        $service->rate_of_interest = $request->rate_of_interest;
        $service->type = $request->type;
        if ($service->save()) {
            $service->cities()->sync($request->city_id);
            return redirect()->route('cms.services.index')->with(
                [
                    "message" => "Service Updated Successfully",
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

    public function delete($id)
    {
        $service = Service::findOrFail($id);
        optional(Storage::disk('public')->delete('images/services/' . $service->image));
        if ($service->delete()) {
            $service->cities()->detach();
            return redirect()->route('cms.services.index')->with(
                [
                    "message" => "Service Deleted Successfully",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.services.index')->with(
                [
                    "message" => "Something Went Wrong",
                    "alert-type" => "error"
                ]
            );
        }
    }
}
