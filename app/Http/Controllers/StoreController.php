<?php

namespace App\Http\Controllers;

use App\Models\Family_bg;
use Illuminate\Http\Request;
use App\Models\Student_info as ModelsStudent_info;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function storePersonalInfo(Request $request)
    {   
       
        $formFields = $request->validate([
            'last_name' => 'required',
            'first_name' =>'required',
            'sex'=> 'required',
            'email'=>'required',
            'middle_name' => 'nullable',
            'religion' => 'nullable',
            'cell_number' => 'nullable',
            'contact_number' => 'nullable',
            'age' => 'nullable',
            'date_of_birth' => 'required',
            'place_of_birth' => 'required',
            'nationality' => 'required',
            'permanent_add' => 'required'
        ]);

        $formFields['id'] = auth()->id();

        ModelsStudent_info::create($formFields);
        
        return redirect('/home');
    }

    public function familyBg(Request $request){
        $name_sibling =$request->name_sibling1.','.$request->name_sibling2.','.$request->name_sibling3.','.$request->name_sibling4;
        $age_sibling =$request->age_sibling1.','.$request->age_sibling2.','.$request->age_sibling3.','.$request->age_sibling4;
        $educational_attain_sibling =$request->educational_attain_sibling1.','.$request->educational_attain_sibling2.','.$request->educational_attain_sibling3.','.$request->educational_attain_sibling4;
        $school_attended_sibling =$request->school_attended_sibling1.','.$request->school_attended_sibling2.','.$request->school_attended_sibling3.','.$request->school_attended_sibling4;
        $occupation_sibling =$request->occupation_sibling1.','.$request->occupation_sibling2.','.$request->occupation_sibling3.','.$request->occupation_sibling4;
        $formFields_bg['name_sibling'] = $name_sibling;
        $formFields_bg['age_sibling'] = $age_sibling;
        $formFields_bg['educational_attain_sibling'] = $educational_attain_sibling;
        $formFields_bg['school_attended_sibling'] = $school_attended_sibling;
        $formFields_bg['occupation_sibling'] = $occupation_sibling;
        $formFields_bg = $request->validate([
            'name_father' => 'required',
            'name_mother' => 'required',
            'age_father' => 'required',
            'age_mother' => 'required',
            'educational_attain_father' => 'required',
            'educational_attain_mother' => 'required',
            'school_attended_father' => 'required',
           'school_attended_mother' => 'required',
           'occupation_father' => 'required',
           'occupation_mother' => 'required',
           'company_add_father' => 'required',
           'company_add_mother' => 'required',
           'contact_number_father' => 'required',
           'contact_number_mother' => 'required',
           'marital_status' => 'required',
        ]);
        $formFields_bg['id'] = auth()->id();

        Family_bg::create($formFields_bg);
        
        return redirect('/home');
    }
    
}
