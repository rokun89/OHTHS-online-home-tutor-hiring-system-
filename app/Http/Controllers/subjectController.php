<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Subjects;
use Illuminate\Http\Request;

class subjectController extends Controller
{
    public function subjectForm()
    {
        return view('backend.pages.categories.subjectform');

    }

    public function subject_store(Request $subjectVar)
    {

        $subjectVar->validate([
            'tutors_name'=>'required',
            'subject'=>'required',
            'class'=>'required',
            'day'=>'required',
            'time'=>'required',

        ]);


        Subjects::create([

            'tutors_name'=>$subjectVar->name,
            'subject'=>$subjectVar->subject,
            'class'=>$subjectVar->class,
            'day'=>$subjectVar->day,
            'time'=>$subjectVar->time,

        ]);

        return redirect()->route('subject-url')->with('message','Submitted Successfully!');

    }






}
