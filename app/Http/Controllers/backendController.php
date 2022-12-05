<?php

namespace App\Http\Controllers;

use App\Models\parents;
use App\Models\Payments;
use App\Models\students;
use App\Models\Subject;
use App\Models\Subjects;
use App\Models\Tutors;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class backendController extends Controller
{
    
    public function home()
    {
     
      //return view('backend.master');   

      return view('backend.pages.dashboard'); 
    }
        



    //*Thoose are the for pages controller

public function parentsPage()
{
    $test=User::where('role','parents')->paginate(5);

    //paginate(5); //for query select * from categories; this the method

    //dd($test);

    return view('backend.pages.parents',compact('test'));
}




public function studentsPage()
{
    $test2=students::paginate(5);

    return view('backend.pages.students',compact('test2'));
    
}



public function tutorPage()
{
    $tutor=User::where('role','tutor')->paginate(5);


    return view('backend.pages.tutor',compact('tutor'));
}





public function tutionPage()
{
    return view('backend.pages.tution');
}




public function subjectPage()
{
    $sub=Subjects::paginate(5);

    return view('backend.pages.subject',compact('sub'));
}




public function servicePage()
{
    return view('backend.pages.service');
}

public function contactPage()
{
    return view('backend.pages.contact');
}

public function aboutPage()
{
    return view('backend.pages.about');
}




}







