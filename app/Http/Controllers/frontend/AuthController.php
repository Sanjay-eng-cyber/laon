<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginShow()
    {
        return view('frontend.login');
    }

    public function login(Request $request)
    {
        // dd($request);
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6', 'max:20']
        ]);
        // dd($request);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('services.show', $request->service_slug)->with(['alert-type' => 'success', 'message' => 'Login Successfully.']);
        } else {
            return redirect()->back()->withErrors(["credentials" => "Credentials doesn't match our records"]);
        }
    }

    public function userRegisterShow()
    {
        return view('frontend.register');
    }

    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:60',
            'email' => 'required|min:5|max:40|email:rfc,dns',
            'password' => 'required|min:8|max:16|confirmed'
        ]);

        $signUp = new User();
        $signUp->name = $request->name;
        $signUp->email = $request->email;
        $signUp->password = Hash::make($request->password);
        if ($signUp->save()) {
            return redirect()->route('login')->with(['alert-type' => 'success', 'message' => 'Sign Up Successfully']);
        } else {
            return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something went wrong. Please try again later.']);
        }
    }

    public function logout()
    {
        if (Auth::guard('web')) {
            Auth::guard('web')->logout();
        }
        return redirect()->route('dashboard');
    }
}
