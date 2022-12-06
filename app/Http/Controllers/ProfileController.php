<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //


    public function getProfile()
    {
        return view('admin.user');
    }

    public function postProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->phonenumber = $request->phonenumber;
        $user->role = $request->role;
        $user->avatar_original = $request->avatar_original;
        $user->save();
        return redirect()->back();
    }
}
