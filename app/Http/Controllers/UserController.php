<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function home(){
        return view('home',[
            'user_type' => Auth::user()->user_type
        ]);
    }
}
