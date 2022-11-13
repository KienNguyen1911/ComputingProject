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

    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callBackFromGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $is_user = User::where('user_email', $user->getEmail())->first();
            if(!$is_user){

                $saveUser = User::updateOrCreate([
                    'google_id' => $user->getId(),
                ],[
                    'google_id' => $user->getId(),
                    'user_name' => $user->getName(),
                    'user_email' => $user->getEmail(),
                    'user_image' => $user->getAvatar(),
                    'user_password' => Hash::make('12345678'),
                    'email_verified_at' => now(),
                ]);
                // $user_role = 'admin';
                // $saveUser->user_role = $user_role;
                $saveUser->save();
                Auth::login($saveUser);
                return redirect()->route('welcome');

            }else{
                $saveUser = User::where('user_email',  $user->getEmail())->update([
                    'google_id' => $user->getId(),
                    'user_image' => $user->getAvatar(),
                ]);
                $saveUser = User::where('user_email', $user->getEmail())->first();
            }
            Auth::login($saveUser);
            // $success='Logged Successfully!';
            if(Auth::user()->user_role == 'admin' || Auth::user()->user_role == 'staff'){
                return view('admin.dashboard');
            }else{
                return redirect()->route('welcome');
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('user_email', 'user_password');
        if (Auth::attempt($credentials)) {
            $success='Logged Successfully!';
            if(Auth::user()->user_role == 'admin' || Auth::user()->user_role == 'staff'){
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('welcome');
            }
        }else{
            $error='Email or Password is incorrect!';
            return redirect()->route('signin')->with('error',$error);
        }
    }

    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('signin');
        }else{
            return redirect()->route('welcome');
        }
    }

}
