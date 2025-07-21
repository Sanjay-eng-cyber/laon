<?php

namespace App\Http\Controllers\cms;

use App\Models\City;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{

    public function index()
    {
        $cities = City::latest()->paginate(10);
        return view('backend.cities.index', compact('cities'));
    }

    public function show($id)
    {
        $city = City::findOrFail($id);
        return view('backend.cities.show', compact('city'));
    }

    public function create()
    {
        return view('backend.cities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:90|min:3|string|unique:cities,name',
        ]);

        $city = new City;
        $city->name = $request->name;
        $city->slug = Str::slug($request->name);
        if ($city->save()) {
            return redirect()->route('cms.cities.index')->with(
                [
                    "message" => "City Added Successfully",
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
        $city = City::findOrFail($id);
        return view('backend.cities.edit', compact('city'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:150|min:3|string|unique:cities,name,' . $id,
        ]);

        $city = City::findOrFail($id);
        $city->name = $request->name;
        $city->slug = Str::slug($request->name);
        if ($city->save()) {
            return redirect()->route('cms.cities.index')->with(
                [
                    "message" => "City Updated Successfully",
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
        $city = City::findOrFail($id);
        if ($city->delete()) {
            return redirect()->route('cms.cities.index')->with(
                [
                    "message" => "City Deleted Successfully",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.cities.index')->with(
                [
                    "message" => "Something Went Wrong",
                    "alert-type" => "error"
                ]
            );
        }
    }
}
