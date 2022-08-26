<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home.home');
    }

    public function editProfile ()
    {
        return view('admin.profile.edit');
    }

    public function updateProfile (Request $request)
    {
        User::updateProfile($request);
        return redirect(route('users.index'))->with('message', 'Profile Updated Successfully');
//        return back()->with('message', 'Profile Updated Successfully');
    }
}
