<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callBackFromGoogle()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $googleUser->getId(),
        ], [
            'user_name' => $googleUser->getName(),
            'user_email' => $googleUser->getEmail(),
            'user_image' => $googleUser->getAvatar(),
            'user_password' => Hash::make('12345678'),
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
