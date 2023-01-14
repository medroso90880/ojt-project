<?php

namespace App\Http\Controllers;

use App\Models\Family_bg;
use App\Models\Student_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function home(){
        return view('home',[
            'user_type' => Auth::user()->user_type,
            'student_infos' =>Student_info::sortable('first_name')->filter(request(['search']))->paginate(10),
        ]);
    }
    public function personalInfo($studentinfo)
    {
    
        $familyinfo = Family_bg::find($studentinfo);
        $studentinfo = Student_info::find($studentinfo);
        return view ('student-info', [
            'user_type' => Auth::user()->user_type,
            'studentinfo' => $studentinfo,
            'familyinfo' => $familyinfo
        ]);
    }
}
