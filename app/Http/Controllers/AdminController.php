<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function edit_user(User $profile)
    {
        return view('admin.index', compact('users'));
    }
}
