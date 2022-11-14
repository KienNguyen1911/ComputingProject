<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function loginWithEmail()
    {
        return view('components.signin');
    }
    public function postLoginEmail(Request $request)
    {
        $credentials = $request->only('user_email', 'user_password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->user_role == 'admin' || Auth::user()->user_role == 'staff') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('/');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email or password is incorrect');
        }
    }
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callBackFromGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $isUser = User::where('google_id', $user->getId())->first();
            if (!$isUser) {
                $newUser = User::updateorcreate([
                    'google_id' => $user->getId(),
                ], [
                    'user_name' => $user->getName(),
                    'user_email' => $user->getEmail(),
                    'user_password' => Hash::make('12345678'),
                    'user_image' => $user->getAvatar(),
                    'email_verified_at' => now(),
                    'user_role' => 'user',
                ]);
                $newUser->save();
                Auth::login($newUser);
                return redirect('/');
            } else {
                Auth::login($isUser);
                if (Auth::user()->user_role == 'admin' || Auth::user()->user_role == 'staff') {
                    return redirect('/admin/dashboard');
                } else {
                    return redirect('/');
                }
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function loginWithFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function callBackFromFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('facebook_id', $user->getId())->first();
            if (!$isUser) {
                $newUser = User::updateorcreate([
                    'facebook_id' => $user->getId(),
                ], [
                    'user_name' => $user->getName(),
                    'user_email' => $user->getEmail(),
                    'user_password' => Hash::make('12345678'),
                    'user_image' => $user->getAvatar(),
                    'email_verified_at' => now(),
                    'user_role' => 'user',
                ]);
                $newUser->save();
                Auth::login($newUser);
                return redirect('/');
            } else {
                Auth::login($isUser);
                if (Auth::user()->user_role == 'admin' || Auth::user()->user_role == 'staff') {
                    return redirect('/admin/dashboard');
                } else {
                    return redirect('/');
                }
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function getSignup()
    {
        return view('components.signup');
    }
    public function postSignup(Request $request)
    {
        $user = new User();
        $user->user_name = $request->firstname . ' ' . $request->lastname;
        $user->user_email = $request->email;
        $user->user_password = Hash::make($request->user_password);
        $user->email_verified_at = now();
        $user->user_role = 'user';
        if ($_POST["password"] === $_POST["confirm_password"]) {
            $user->save();
            return redirect()->route('login');
        } else {
            return redirect()->route('signup')->with('error', 'Passwords are not match');
        }
    }
}
