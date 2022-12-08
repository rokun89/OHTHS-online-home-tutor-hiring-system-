<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Subjects;
use App\Models\Tutions;
use App\Models\Tutors;
use App\Models\User;
use Illuminate\Http\Request;

class tutionController extends Controller
{
    
    public function tutionForm()
    {
        $cls=Classes::all();
        $sub=Subjects::all();
        $tutorId=User::where('role','tutor')->get();
        return view('backend.pages.categories.tutionsForm',compact('cls','sub','tutorId'));
    }


    public function tution_form_store(Request $request)
    {
        // dd($request->all());

        Tutions::create([
            'title'=>$request->title,
            'tutor_id'=>$request->tutor,
            'class_id'=>$request->class,
            'subject_id'=>$request->subject,
            'salary'=>$request->salary,
            'weekend_days'=>$request->days,

        ]);

        notify()->success('Submitted Succesfull');
        return redirect()->route('tution-url');
    }

    

}
