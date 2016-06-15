<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile.index')->with('profile', Auth::user());
    }

    public function update(Request $request)
    {
        if ($request->email == Auth::user()->email) {
            $this->validate($request, [
                "firstname" => "required",
                "lastname" => "required",
                "image" => "required"
            ]);
        } else {
            $this->validate($request, [
                "firstname" => "required",
                "lastname" => "required",
                "email" => "required|unique:users",
                "image" => "required"
            ]);
        }
        Auth::user()->update($request->all());
        Toastr::info("Profile has been successfully updated");
        return back();
    }
}
