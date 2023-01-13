<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }
    public function callback(){
        $googleUser = Socialite::driver('google')->user();
        $user = User::updateOrCreate([
            'email' => $googleUser->email,
        ],[
            'name' => $googleUser->name,
            'password' =>Hash::make(Str::random(24))
        ]);
        Auth::login($user);
 
        return redirect('/home');
    }
}
