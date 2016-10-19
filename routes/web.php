<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('auth.login');
});

Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::auth();

Route::get('/dashboard', 'HomeController@index');
Route::resource('profile', 'ProfileController');
Route::patch('profile/{profile}/password', 'ProfileController@update_password');
Route::resource('admin', 'AdminController');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
