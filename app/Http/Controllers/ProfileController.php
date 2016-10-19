<?php

namespace App\Http\Controllers;

use App\User;
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

    public function edit(User $profile)
    {
        return view('profile.index', compact('profile'));
    }

    public function update(User $profile, Request $request)
    {
        $this->validate($request, [
            "firstname" => "required",
            "lastname" => "required",
            "image" => "required"
        ]);

        $profile->update($request->all());
        Toastr::info("Profile has been successfully updated");
        return back();
    }

    public function update_password(User $profile, Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6|confirmed'
        ]);

        $profile->update([
            'password' => bcrypt($request->password)
        ]);

        Toastr::info("Profile has been successfully updated");
        return back();
    }
}
