<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
// use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function getSignin()
    {
        return view('components.signin');
    }

    public function getSignup()
    {
        return view('components.signup');
    }

    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callBackFromGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $is_user = User::where('email', $user->getEmail())->first();
            if (!$is_user) {

                $saveUser = User::updateOrCreate([
                    'google_id' => $user->getId(),
                ], [
                    'google_id' => $user->getId(),
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'avatar_original' => $user->getAvatar(),
                    'password' => Hash::make('password'),
                    'email_verified_at' => now(),
                    'role' => 'user',
                ]);
                $saveUser->save();
            } else {
                $saveUser = User::where('email',  $user->getEmail())->update([
                    'google_id' => $user->getId(),
                    'avatar_original' => $user->getAvatar(),
                ]);
                $saveUser = User::where('email', $user->getEmail())->first();
            }
            Auth::loginUsingId($saveUser->id);
            if (Auth::user()->role == 'admin' || Auth::user()->role == 'staff') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('welcome');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $success = 'Logged Successfully!';
            if (Auth::user()->role == 'admin' || Auth::user()->role == 'staff') {
                return route('admin.dashboard');
            } else {
                return redirect()->route('welcome');
            }
        } else {
            $error = 'Email or Password is incorrect!';
            return redirect()->route('signin')->with('error', $error);
        }
    }

    public function postSignup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_role = 'user';
        $user->email_verified_at = now();
        $user->save();
        $success = 'Registered Successfully!';
        return redirect()->route('signin')->with('success', $success);
    }
    public function loginWithFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callBackFromFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $is_user = User::where('email', $user->getEmail())->first();
            if (!$is_user) {
                $saveUser = User::updateOrCreate([
                    'facebook_id' => $user->getId(),
                ], [
                    'facebook_id' => $user->getId(),
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'avatar_original' => $user->getAvatar(),
                    'password' => Hash::make('password'),
                    'email_verified_at' => now(),
                    'role' => 'user',
                ]);
                $saveUser->save();
            } else {
                $saveUser = User::where('email',  $user->getEmail())->update([
                    'facebook_id' => $user->getId(),
                    'avatar_original' => $user->getAvatar(),
                ]);
                $saveUser = User::where('email', $user->getEmail())->first();
            }
            Auth::loginUsingId($saveUser->id);
            if (Auth::user()->role == 'admin' || Auth::user()->role == 'staff') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('welcome');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('signin');
    }
}
