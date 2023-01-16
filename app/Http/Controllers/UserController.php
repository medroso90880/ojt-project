<?php

namespace App\Http\Controllers;

use App\Models\Counselor_note;
use App\Models\Educational_bg;
use App\Models\Extra_curricular_act;
use App\Models\Family_bg;
use App\Models\Health_physical_dev;
use App\Models\Psychological_test_profile;
use App\Models\Student_info;
use App\Models\Residence;
use App\Models\Self_assessment;
use App\Models\Social_bg;
use App\Models\Vocational_planning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function home(){

        if(Auth::user()->user_type == 'student')
        {
            $studentinfo = Auth::user()->id;
            $familyinfo = Family_bg::find($studentinfo);
            $residence = Residence::find($studentinfo);
            $studentinfo = Student_info::find($studentinfo);
            return view ('student-info', [
                'user_type' => Auth::user()->user_type,
                'user_id' => Auth::user(),
                'studentinfo' => $studentinfo,
                'familyinfo' => $familyinfo,
                'residence' => $residence
            ]);
        }
        else{
        return view('home',[
            'user_type' => Auth::user()->user_type,
            'student_infos' =>Student_info::sortable('first_name')->filter(request(['search']))->paginate(10),
            'student' => Auth::user(),
        ]);
    }
    }
    public function personalInfo($studentinfo)
    {
        $familyinfo = Family_bg::find($studentinfo);
        $residence = Residence::find($studentinfo);
        $studentinfo = Student_info::find($studentinfo);
        return view ('student-info', [
            'user_type' => Auth::user()->user_type,
            'user_id' => Auth::user(),
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
            'extracu' => $educational_bg,
            'studentinfo' => $studentinfo
        ]);
    }
    public function selftAssessment($studentinfo)
    {
        return view ('self-assessment',[
            'user_type' => Auth::user()->user_type,
            'social_bg' =>  Social_bg::find($studentinfo),
            'vocational' =>  Vocational_planning::find($studentinfo),
            'self_assessment' =>  Self_assessment::find($studentinfo)
        ]);
    }
    public function psychTest($studentinfo)
    {
        return view ('psych-test',[
            'user_type' => Auth::user()->user_type,
            'psychtest' => Psychological_test_profile::find($studentinfo)
        ]);
    }
    public function counselor($studentinfo)
    {
        return view ('counselor-notes',[
            'user_type' => Auth::user()->user_type,
            'counselor' => Counselor_note::find($studentinfo)
        ]);
    }

}
