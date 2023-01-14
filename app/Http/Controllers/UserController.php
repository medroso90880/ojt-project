<?php

namespace App\Http\Controllers;

use App\Models\Educational_bg;
use App\Models\Extra_curricular_act;
use App\Models\Family_bg;
use App\Models\Health_physical_dev;
use App\Models\Student_info;
use App\Models\Residence;
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
        $residence = Residence::find($studentinfo);
        $studentinfo = Student_info::find($studentinfo);
        
        return view ('student-info', [
            'user_type' => Auth::user()->user_type,
            'studentinfo' => $studentinfo,
            'familyinfo' => $familyinfo,
            'residence' => $residence
        ]);
    }
    public function health($studentinfo)
    {
        $studentinfo = Health_physical_dev::find($studentinfo);
        return view ('health',[
            'user_type' => Auth::user()->user_type,
            'studentinfo' => $studentinfo,
        ]);
    }
    public function educationalBg($studentinfo)
    {
        $educational_bg = Extra_curricular_act::find($studentinfo);
        $studentinfo = Educational_bg::find($studentinfo);
        return view ('educational-bg',[
            'user_type' => Auth::user()->user_type,
            'educational_bg' => $studentinfo,
            'extracu' => $educational_bg
        ]);
    }
}
