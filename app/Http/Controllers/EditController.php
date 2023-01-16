<?php

namespace App\Http\Controllers;

use App\Models\Student_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function personalinfo(){
        $studentinfo = Auth::user()->id;
        return view('edit-personal-info',[
            'user_type' => Auth::user()->user_type,
            'studentinfo' => Student_info::find($studentinfo)
        ]);
    }
    public function health($personal_info){
        
    }
    public function education($personal_info){
        
    }
    public function selfAssessment($personal_info){
        
    }
    public function psychtest($personal_info){
        
    }
    public function counselNotes($personal_info){
        
    }
}
